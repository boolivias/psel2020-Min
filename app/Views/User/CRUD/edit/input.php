<?php
$inputs = array(
    array(
        'elements' => array(
            array(
                'type'      => 'text',
                'name'      => 'user_name',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group'),
                'attr'      => array('no_values' => array('readonly')),
                'name_ui'   => 'Nome',
                'value'     => set_value('user_name')
            ),
            array(
                'type'      => 'cpf',
                'name'      => 'user_cpf',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group'),
                'attr'      => array('no_values' => array('readonly')),
                'value'     => set_value('user_cpf'),
                'name_ui'   => 'CPF',
            )
        )
    ),
    array(
        'elements' => array(
            array(
                'type'      => 'text',
                'name'      => 'user_email',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group'),
                'attr'      => array('no_values' => array('readonly')),
                'name_ui'   => 'Email',
                'value'     =>  set_value('user_email')
            )
        )
    ),
    array(
        'elements' => array(
            array(
                'type'      => 'password',
                'name'      => 'user_password',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group', 'invisible'),
                'attr'      => array(),
                'name_ui'   => 'Nova senha',
                'value'     => ''
            ),
            array(
                'type'      => 'password',
                'name'      => 'confirmPassword',
                'class'     => array('form-control'),
                'class_div' => array('col', 'form-group', 'invisible'),
                'attr'      => array(),
                'name_ui'   => 'Confirmação de senha',
                'value'     => ''
            )
        )
    )

);
