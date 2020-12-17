<?php include 'app/Views/User/CRUD/login/input.php';
echo view('structure/form', array(
    'action' => '',
    'inputs' => $inputs,
    'class_form' => array('d-flex', 'flex-column'),
    'submit' => array(
        'text'  => 'Entrar',
        'class' => array('btn', 'btn-login', 'ml-auto', 'rounded', 'mt-5')
    )
));
