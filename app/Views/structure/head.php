<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind Processo Seletivo</title>
    <?php foreach ($css as $file_css) { ?>
        <link rel="stylesheet" href="<?= base_url('public/css') . '/' . $file_css ?>">
    <?php
    }
    ?>
</head>

<body>
    <?= $header ? view('structure/header', $data['data']) : '' ?>

    <?= $view ? view($view, array('data' => $data['data'])) : '' ?>

    <?php foreach ($js as $file_js) { ?>
        <script src="<?= base_url('public/js') . '/' . $file_js ?>"></script>
    <?php
    }
    ?>
</body>

</html>