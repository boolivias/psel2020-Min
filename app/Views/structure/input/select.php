<select name="<?= $name ?>" class="<?= implode(' ', $class) ?>">
    <?php foreach ($options_select as $option) { ?>
        <option value="<?= $option['acs_id'] ?>"><?= $option['acs_name'] ?></option>
    <?php } ?>
</select>