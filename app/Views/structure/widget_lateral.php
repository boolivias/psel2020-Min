<div class="widget-lateral shadow-lg ">
    <div class="widget-lateral-head">
        <div class="row">
            <div class="col">
                <button type="button" class="close float-left" data-event="closeWidget">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="text-center text-uppercase">Detalhes do usuário</p>
            </div>
        </div>
    </div>
    <div class="widget-lateral-content">
        <div class="widget-lateral-header">
            <div class="row">
                <div class="col">
                    <p class="text-center">ID: <span>Teste</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="<?= base_url('public/storage/default.png') ?>" alt="Foto de perfil" class="img-thumbnail mx-auto">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Nome: <span>Teste</span></p>
                </div>
                <div class="col">
                    <p>Cargo: <span>Teste</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Email: <span>Teste</span></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="widget-lateral-options">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span>Editar</span></li>
                <li class="list-group-item"><span>Alterar Cargo</span></li>
                <li class="list-group-item"><span>Desativar/Ativar</span></li>
            </ul>
        </div>
    </div>
</div>