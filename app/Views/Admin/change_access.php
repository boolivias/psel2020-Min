<div class="body h-100 d-flex">
    <div class="w-50 m-auto">
        <h2 class="text-center">Alterar cargo</h2>
        <p>Nome: <span><?= $user_change['user_name'] ?></span></p>
        <p>E-mail: <span><?= $user_change['user_email'] ?></span></p>
        <?= view('structure/form', array(
            'action' => '',
            'class_form' => array(),
            'inputs' => array(
                array(
                    'elements' => array(
                        array(
                            'type'      => 'select',
                            'name'      => 'user_acs_id',
                            'class'     => array('custom-select')
                        )
                    )
                )
            ),
            'submit' => array(
                'text'  => 'Salvar',
                'class' => array('btn', 'btn-success', 'float-right', 'mt-5')
            ),
            'cancel' => array(
                'text'  => 'Cancelar',
                'class' => array('btn', 'btn-danger', 'mt-5', 'float-left'),
                'href'  => '#',
                'attr'  => array('data-event' => 'disableEdit')
            )
        )); ?>
    </div>
</div>