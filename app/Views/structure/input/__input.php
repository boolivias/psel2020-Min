<!-- Recupera um array com as informações de cada tipo, para atribuir attrs especificos -->
<?php include 'app/Views/structure/input/' . $type . '.php' ?>

<input type="<?= $attr['type'] ?>" name="<?= $name ?>" class="<?= implode(' ', $class) ?>" <?php
                                                                                            foreach ($attr['others'] as $name => $value) {
                                                                                                echo $name . '="' . $value . '" ';
                                                                                            }
                                                                                            ?> />