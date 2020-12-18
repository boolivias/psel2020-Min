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
        loadView('Admin/index', $data, true);
    }
}
