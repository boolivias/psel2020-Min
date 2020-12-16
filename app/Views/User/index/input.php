<?php
$inputs = array(
    array(
        'elements' => array(
            array(
                'type'      => 'text',
                'name'      => 'user_credential',
                'class'     => array('form-control'),
                'class_div' => array('mx-auto', 'form-group-login'),
                'attr'      => array(),
                'name_ui'   => 'CPF ou E-mail'
            )
        )
    ),
    array(
        'elements' => array(
            array(
                'type'      => 'password',
                'name'      => 'user_password',
                'class'     => array('form-control', 'mt-3'),
                'class_div' => array('mx-auto', 'form-group-login'),
                'attr'      => array(),
                'name_ui'   => 'Senha'
            )
        )
    )
);

$inputs_register = array(
    array(
        'elements' => array(
            array(
                'type'      => 'text',
                'name'      => 'user_email',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'name_ui'   => 'E-mail'
            )
        )
    ),
    array(
        'elements' => array(
            array(
                'type'      => 'text',
                'name'      => 'user_name',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login', 'mr-2'),
                'attr'      => array(),
                'name_ui'   => 'Nome'
            ),
            array(
                'type'      => 'cpf',
                'name'      => 'user_cpf',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'name_ui'   => 'CPF'
            )
        )
    ),
    array(
        'elements' => array(
            array(
                'type'      => 'password',
                'name'      => 'user_password',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login', 'mr-2'),
                'attr'      => array(),
                'name_ui'   => 'Senha'
            ),
            array(
                'type'      => 'password',
                'name'      => 'confirmPassword',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'name_ui'   => 'Confirme a senha'
            )
        )
    ),
    array(
        'elements' => array(
            array(
                'type'      => 'file',
                'name'      => 'user_email',
                'class'     => array('custom-file-input'),
                'class_div' => array('col', 'custom-file', 'mt-4'),
                'attr'      => array(),
                'name_ui'   => 'Escolha uma foto de perfil'
            )
        )
    )
);
