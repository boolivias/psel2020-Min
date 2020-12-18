<div class="widget-lateral-header">
    <div class="row">
        <div class="col">
            <p class="text-center">ID: <span><?= $user['user_id'] ?></span></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="<?= base_url('public/storage/default.png') ?>" alt="Foto de perfil" class="img-thumbnail mx-auto">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Cargo: <span><?= $user['acs_name'] ?></span></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Nome: <span><?= $user['user_name'] ?></span></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Email: <span><?= $user['user_email'] ?></span></p>
        </div>
    </div>
</div>
<hr>
<div class="widget-lateral-options">
    <ul class="list-group list-group-flush">
        <a class="list-group-item" href="<?= base_url('user/edituser') . '/' . $user['user_id'] ?>"><span>Editar</span></a>
        <a class="list-group-item" href="<?= base_url('admin/changeaccess') . '/' . $user['user_id'] ?>"><span>Alterar Cargo</span></a>
        <a class="list-group-item" href="#" onclick="teste()" data-event="changeStatus" data-value="<?= $user['user_id'] ?>"><span>Desativar/Ativar</span></a>
    </ul>
</div>

<script>
    $('*[data-event="changeStatus"]').click(function() {
        if (window.confirm('Tem certeza que deseja ativar/desativar este usuário ?')) {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    alert(request.responseText);
                }
            }
            request.open("POST", "http://localhost/psel2020-Min/admin/changestatus/" + $(this).attr('data-value'));
            request.send(null);
        }
    })
</script>