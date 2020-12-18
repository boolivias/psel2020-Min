<?php
$inputs = array(
    array(
        'elements' => array(
            array(
                'type'      => 'text',
                'name'      => 'user_credential',
                'class'     => array('form-control'),
                'class_div' => array('col', 'mx-auto', 'form-group-login'),
                'attr'      => array(),
                'value'     => set_value('user_credential'),
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
                'class_div' => array('col', 'mr-auto', 'form-group-login'),
                'attr'      => array(),
                'error'     => $msg ?? null,
                'value'     => '',
                'name_ui'   => 'Senha'
            )
        )
    )
);
