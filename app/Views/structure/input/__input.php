<!-- Recupera um array com as informações de cada tipo, para atribuir attrs especificos -->
<?php include 'app/Views/structure/input/' . $type . '.php' ?>
<div class="<?= implode(' ', $class_div ?? array()) ?>">
    <label for=" <?= $name ?>" class="<?= implode(' ', $class_label ?? array()) . implode(' ', $attr_label['class'] ?? array()) ?>"><?= $name_ui ?></label>
    <input type="<?= $attr['type'] ?>" name="<?= $name ?>" class="<?= implode(' ', $class) ?>" value="<?= $value ?? '' ?>" <?php
                                                                                                                        foreach ($attr['others'] as $name => $value) {
                                                                                                                            if ($name != 'no_values') {
                                                                                                                                echo $name . '="' . $value . '" ';
                                                                                                                            } else {
                                                                                                                                echo implode(' ', $value) . ' ';
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?> />
</div>