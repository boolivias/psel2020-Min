<?php include 'app/Views/User/index/input.php' ?>
<main class="login-widget d-flex">
    <div class="shadow">
        <div id="login-carousel" class="carousel slide" data-ride="carousel" data-interval="0" data-keyboard="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col" style="flex-grow: 2;">
                            <h1>login</h1>
                            <?= view('structure/form', array(
                                'action' => '',
                                'inputs' => $inputs,
                                'class_form' => array('d-flex', 'flex-column'),
                                'submit' => array(
                                    'text'  => 'Entrar',
                                    'class' => array('btn', 'btn-login', 'mx-auto', 'rounded', 'mt-5')
                                )
                            )); ?>
                        </div>
                        <div class="col register-widget-lateral">
                            <h1>NOVO USUÁRIO</h1>
                            <p>Não possui cadastro?</p>
                            <p>Clique na seta abaixo para iniciar seu cadastro.</p>
                            <a href="#login-carousel" role="button" data-slide="next">&rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h1 class="text-uppercase text-center">cadastro</h1>
                    <div class="container px-5 py-3">
                        <?= view('structure/form', array(
                            'action' => '',
                            'inputs' => $inputs_register,
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
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>