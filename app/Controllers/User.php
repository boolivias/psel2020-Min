<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        helper('view');
        helper('form');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url() . '/user/index');
    }

    public function index()
    {
        if ($this->isLogged()) {
            return $this->loggedRedirect();
        }

        $data_view = array();

        if ($this->request->getMethod() === 'post') {
            $user = model('App\Models\CRUD\User');
            $data = $this->request->getPost();
            if ($id = $user->credentialIsValid($data['user_credential'], $data['user_password'])) {
                if ($user->isActive($id)) {
                    $this->createSession($id);
                    return $this->loggedRedirect();
                } else {
                    $data_view['msg'] = 'Sua conta está inativa, contate um administrador';
                }
            } else {
                $data_view['msg'] = 'Crendenciais inválidas';
            }
        }

        loadView('User/index', $data_view);
    }

    public function home()
    {
        $this->verifyLogged();

        $session = session();
        return $this->editUser($session->get('credentials')['id']);
    }

    public function newUser()
    {
        if ($this->request->getMethod() === 'post') {
            $user = model('App\Models\CRUD\User');
            $data = $this->request->getPost();
            $photo = $this->request->getFile('user_photo');
            if ($id = $user->insert($data, $photo)) {
                $this->createSession($id);
                return redirect()->to(base_url() . '/user/home');
            } else {
                $data_view['errors'] = $user->errors();
            }
        }
        $data_view['form_new_active'] = true;
        loadView('User/index', $data_view);
    }

    public function editUser($id)
    {
        $user = model('App\Models\CRUD\User');
        if ($this->request->getMethod() === 'post') {
            $session = session();
            $editor = $session->get('credentials')['id'];
            if ($editor == $id || $user->verifyPermission($editor, 'edit')) {
                $data = $this->request->getPost();
                if ($user->update($id, $data)) {
                    echo json_encode(array('msg' => 'Dados atualizados'));
                }
            } else {
                echo json_encode(array('msg' => 'Você não tem permissão para alterar os dados deste usuário'));
            }
        }

        loadView('User/edit', array(), true);
    }

    private function createSession($id)
    {
        $session = session();
        $session->set('credentials', [
            'logged_in' => true,
            'id'        => $id
        ]);
    }

    private function isLogged()
    {
        $session = session();
        return $session->get('credentials')['logged_in'];
    }

    private function verifyLogged()
    {
        if ($this->isLogged()) {
            return redirect()->to(base_url() . '/user/index');
        }
    }

    private function loggedRedirect()
    {
        $session = session();
        $user = model('App\Models\CRUD\User');
        if ($user->verifyPermission($session->get('credentials')['id'], 'dashboard')) {
            return redirect()->to(base_url() . '/admin/index');
        } else {
            return redirect()->to(base_url() . '/user/home');
        }
    }
}
