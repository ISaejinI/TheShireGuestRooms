<?php

$bedCount_choices = [];
$nightPrice_choices = [];

$args = array(
    'post_type' => 'smial',
);
$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $bedCount_choices[] = get_field('bed_count');
        $nightPrice_choices[] = get_field('night_price');
    }
}

wp_reset_postdata();

$bedCount_choices = array_unique($bedCount_choices);
sort($bedCount_choices);

$nightPrice_choices = array_unique($nightPrice_choices);
sort($nightPrice_choices);

global $wp;
$action = home_url($wp->request);
?>
<form action="<?php echo $action ?>" method="post">
    <p>Nombre de couchages</p>
    <?php foreach ($bedCount_choices as $choice) : ?>
        <input type="checkbox" id="bed_<?php echo esc_attr($choice); ?>" name="bed_count[]" value="<?php echo esc_attr($choice); ?>" <?php echo (!empty($_POST['bed_count']) && in_array($choice, $_POST['bed_count'])) ? 'checked' : ''; ?> />
        <label for="bed_<?php echo esc_attr($choice); ?>"><?php echo esc_html($choice); ?></label>
    <?php endforeach; ?>

    <p>Prix par nuits</p>
    <select name="filter-night_price">
        <option value="">-- Sélectionner --</option>
        <?php foreach ($nightPrice_choices as $value => $choice) : ?>
            <option
                    value="<?php echo $value ?>"
                <?php echo $_POST && $_POST['filter-night_price'] === $value ? 'selected' : '' ?>
            >
                <?php echo $choice ?>
            </option>
        <?php endforeach; ?>
    </select>

    <input type="submit" value="OK">
</form>