<form action="<?= $action ?>" method="post" class="<?= implode(' ', $class_form ?? array()) ?>" enctype="multipart/form-data">
    <?php
    foreach ($inputs as $row) { ?>
        <div class="row">
            <?php
            foreach ($row['elements'] as $element) {
                if ($element['type'] != 'select') {
                    echo view('structure/input/__input', array_merge($element));
                } else {
                    echo view('structure/input/select', array_merge($element));
                }
            }
            ?>
        </div>
    <?php
    }

    if (isset($cancel)) {
        $attr_string = '';
        if (isset($cancel['attr'])) {
            foreach ($cancel['attr'] as $name => $value) {
                $attr_string .= $name . '="' . $value . '" ';
            }
        }
        echo '
        <a href="' . ($cancel['href'] ?? '') . '" class="' . implode(' ', $cancel['class'] ?? array()) . '" ' . $attr_string . '>' . $cancel['text'] . '</a>';
    }

    if (isset($submit)) {
        echo '
        <input type="submit" class="' . implode(' ', $submit['class'] ?? array()) . '" value="' . $submit['text'] . '">';
    }
    ?>
</form>