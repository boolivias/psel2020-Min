<?php

$inputs = array(
    array(
        'elements' => array(
            array(
                'type'      => 'text',
                'name'      => 'user_email',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'value'     => set_value('user_email'),
                'error'     => $errors['user_email'] ?? null,
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
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'value'     => set_value('user_name'),
                'error'     => $errors['user_name'] ?? null,
                'name_ui'   => 'Nome'
            ),
            array(
                'type'      => 'cpf',
                'name'      => 'user_cpf',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'value'     => set_value('user_cpf'),
                'error'     => $errors['user_cpf'] ?? null,
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
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'value'     => '',
                'error'     => $errors['user_password'] ?? null,
                'name_ui'   => 'Senha'
            ),
            array(
                'type'      => 'password',
                'name'      => 'confirmPass',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group-login'),
                'attr'      => array(),
                'value'     => '',
                'error'     => $errors['confirmPass'] ?? null,
                'name_ui'   => 'Confirme a senha'
            )
        )
    ),
    array(
        'elements' => array(
            array(
                'type'      => 'file',
                'name'      => 'user_photo',
                'class'     => array('custom-file-input'),
                'class_label' => array('mx-auto'),
                'class_div' => array('col', 'custom-file', 'mt-4'),
                'attr'      => array(),
                'error'     => $errors['user_urlPhoto'] ?? null,
                'name_ui'   => 'Escolha uma foto de perfil'
            )
        )
    )
);
