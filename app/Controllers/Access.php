<?php

namespace App\Controllers;

class Access extends BaseController
{
    public function index()
    {
        echo 'User index';
    }

    public function newAccess()
    {
        if ($this->request->getMethod() === 'post') {
            $data = $this->request->getPost();
            $access = model('AccessModel');
            if ($access->insert($data)) {
                echo 'cadastrou';
            } else {
                echo 'não cadastrou';
            }
        }
    }
}
