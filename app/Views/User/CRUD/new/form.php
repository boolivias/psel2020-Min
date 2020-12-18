<?php include 'app/Views/User/CRUD/new/input.php';
echo view('structure/form', array(
    'action' => site_url('user/newuser'),
    'inputs' => $inputs,
    'class_form' => array(),
    'submit' => array(
        'text'  => 'Cadastrar',
        'class' => array('btn', 'btn-success', 'ml-auto', 'mt-5', 'mb-4', 'float-right', 'px-3')
    ),
    'cancel' => array(
        'text'  => 'Voltar',
        'class' => array('btn', 'btn-danger', 'mr-auto', 'mt-5', 'mb-4', 'float-left', 'px-3'),
        'href'  => '#login-carousel',
        'attr'  => array(
            'data-slide' => 'prev'
        )
    )
));
