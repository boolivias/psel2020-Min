<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        helper('view');
    }

    public function index()
    {
        $session = session();
        $user = model('App\Models\CRUD\User');
        if (!$session->get('credentials')['logged_in']) {
            return redirect()->to(base_url() . '/user/index');
        }
        if (!($user->verifyPermission($session->get('credentials')['id'], 'dashboard'))) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['user'] = (array) $user->getByID($session->get('credentials')['id']);
        $data['list_users'] = $user->getAll();
        loadView('Admin/index', $data, true);
    }

    public function changeAccess($id)
    {
        $session = session();
        $access = model('AccessModel');
        $user = model('App\Models\CRUD\User');
        if ($this->request->getMethod() === 'post') {
            $data = $this->request->getPost();
            if ($user->update($id, $data)) {
                echo $this->index();
                echo "<scrip>
                    alert('Cargo atualizado');
                    </scrip>";
                return;
            }
        }
        $data['user'] = (array) $user->getByID($session->get('credentials')['id']);
        $data['user_change'] = (array) $user->getByID($id);
        $data['options_select'] = (array) $access->find();
        loadView('Admin/change_access', $data, true);
    }

    public function changeStatus($id)
    {
        if ($this->request->getMethod() === 'post') {
            $user_model = model('App\Models\CRUD\User');
            $user_data = $user_model->getByID($id);
            $alert = '';
            if ($user_data->user_status == 1) {
                $user_updated = array('user_status' => 0);
                $msg = "Usuário desativado com sucesso!";
            } else {
                $user_updated = array('user_status' => 1);
                $msg = "Usuário ativado com sucesso!";
            }
            $user_model->update($id, $user_updated);
            echo $msg;
        }
    }
}
