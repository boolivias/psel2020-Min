<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        echo 'User index';
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
