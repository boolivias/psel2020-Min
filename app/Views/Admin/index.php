<div class="body d-flex">
    <table class="table w-75 mx-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_users as $u) { ?>
                <tr>
                    <th scope="row"><?= $u['user_id'] ?></th>
                    <td><?= $u['user_name'] ?></td>
                    <td><?= $u['user_email'] ?></td>
                    <td><button class="btn btn-action" data-event="openWidget" data-value="<?= $u['user_id'] ?>">...</button></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?= view('structure/widget_lateral') ?>