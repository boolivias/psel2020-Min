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
}
