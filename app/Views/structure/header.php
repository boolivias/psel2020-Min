<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="row">
        <div class="col my-auto nav-img">
            <img src="<?= base_url('public/storage/default.png') ?>" alt="Foto de perfil" class="rounded-circle">
        </div>
        <div class="col ml-3">
            <p class="user-info-label">Nome: <span class="user-info-values">teste</span></p>
            <p class="user-info-label">CPF: <span class="user-info-values">teste</span></p>
        </div>
    </div>
    <div class="ml-auto">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Editar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-item-logout" href="#">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>