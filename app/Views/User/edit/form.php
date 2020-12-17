<?php include 'app/Views/User/edit/input.php' ?>
<div class="container">
    <h1>Editar dados cadastrados</h1>
    <div class="row">
        <div class="mr-5">
            <img src="<?= base_url('public/storage/default.png') ?>" class="rounded float-left img-thumbnail" alt="Foto de perfil" style="max-width: 400px;">
        </div>
        <div class="col d-flex flex-column">
            <div class="container my-auto d-flex flex-column">
                <button class="btn btn-info ml-auto px-4 mb-4" data-event="enableEdit">Editar</button>
                <?= view('structure/form', array(
                    'action' => '',
                    'inputs' => $inputs,
                    'class_form' => array('my-auto', 'w-100'),
                    'submit' => array(
                        'text'  => 'Salvar',
                        'class' => array('btn', 'btn-success', 'float-right', 'mt-5', 'invisible')
                    ),
                    'cancel' => array(
                        'text'  => 'Cancelar',
                        'class' => array('btn', 'btn-danger', 'mt-5', 'float-left', 'invisible'),
                        'href'  => '#',
                        'attr'  => array('data-event' => 'disableEdit')
                    )
                )); ?>
            </div>
        </div>
    </div>
</div>