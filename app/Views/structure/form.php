<form action="<?= $action ?>" method="post" class="<?= implode(' ', $class_form ?? array()) ?>">
    <?php
    foreach ($inputs as $row) { ?>
        <div class="row">
            <?php
            foreach ($row['elements'] as $element) {
                echo view('structure/input/__input', $element);
            }
            ?>
        </div>
    <?php
    }

    if (isset($cancel)) {
        $attr_string = '';
        foreach ($cancel['attr'] as $name => $value) {
            $attr_string .= $name . '="' . $value . '" ';
        }
        echo '
        <a href="' . $cancel['href'] . '" class="' . implode(' ', $cancel['class'] ?? array()) . '" ' . $attr_string . '>' . $cancel['text'] . '</a>';
    }

    if (isset($submit)) {
        echo '
        <input type="submit" class="' . implode(' ', $submit['class'] ?? array()) . '" value="' . $submit['text'] . '">';
    }
    ?>
</form>