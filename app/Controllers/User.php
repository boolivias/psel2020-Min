<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() === 'post') {
            $user = model('App\Models\CRUD\User');
            $data = $this->request->getPost();
            if ($id = $user->credentialIsValid($data['user_credential'], $data['user_password'])) {
                $session = session();
                $session->set('credentials', [
                    'logged_in' => true,
                    'id'        => $id
                ]);
                echo 'logou';
            } else {
                echo json_encode(array('msg' => 'Crendenciais inválidas'));
            }
        }
    }

    public function newUser()
    {
        if ($this->request->getMethod() === 'post') {
            $user = model('App\Models\CRUD\User');
            $data = $this->request->getPost();
            $photo = $this->request->getFile('user_photo');
            if ($user->insert($data, $photo)) {
                echo '</br>cadastrou';
            } else {
                echo "<pre>" . json_encode($user->errors(), JSON_PRETTY_PRINT) . "</pre>";
            }
        }
    }

    public function editUser($id)
    {
        $user = model('App\Models\CRUD\User');
        echo json_encode($user->find($id));
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
    }
}
