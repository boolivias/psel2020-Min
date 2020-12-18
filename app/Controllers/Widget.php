<?php

namespace App\Controllers;

class Widget extends BaseController
{
    public function index($id)
    {
        $user = model('App\Models\CRUD\User');
        $data['user'] = (array) $user->getByID($id);

        echo view('structure/widget_lateral_content', $data);
    }
}
