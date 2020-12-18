<main class="login-widget d-flex">
    <div class="shadow">
        <div id="login-carousel" class="carousel slide" data-ride="carousel" data-interval="0" data-keyboard="false">
            <div class="carousel-inner">
                <div class="carousel-item <?= isset($data['form_new_active']) ? '' : 'active' ?>">
                    <div class="row">
                        <div class="col" style="flex-grow: 2;">
                            <h1>login</h1>
                            <?= view('User/CRUD/login/form.php', $data); ?>
                        </div>
                        <div class="col register-widget-lateral">
                            <h1>NOVO USUÁRIO</h1>
                            <p>Não possui cadastro?</p>
                            <p>Clique na seta abaixo para iniciar seu cadastro.</p>
                            <a href="#login-carousel" role="button" data-slide="next">&rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item <?= isset($data['form_new_active']) ? 'active' : '' ?>">
                    <h1 class="text-uppercase text-center">cadastro</h1>
                    <div class="container px-5 py-3">
                        <?= view('User/CRUD/new/form.php', $data); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>