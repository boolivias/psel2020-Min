<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="row">
        <div class="col my-auto nav-img">
            <img src="<?= base_url('public/storage/default.png') ?>" alt="Foto de perfil" class="rounded-circle">
        </div>
        <div class="col ml-3">
            <p class="user-info-label">Nome: <span class="user-info-values"><?= $user['user_name'] ?></span></p>
            <p class="user-info-label">CPF: <span class="user-info-values" data-mask="000.000.000-00"><?= $user['user_cpf'] ?></span></p>
        </div>
    </div>
    <div class="ml-auto">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('user/index') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . '/user/edituser/' . $user['user_id'] ?>">Editar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-item-logout" href="<?= base_url() . '/user/logout' ?>">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>