<form action="<?= $action ?>" method="post">
    <?php
    foreach ($inputs as $infos) {
        echo view('structure/input/__input', $infos);
    }
    ?>
</form>