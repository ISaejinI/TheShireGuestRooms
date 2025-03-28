<?php get_header(); ?>

<div>
    <?php
    while (have_posts()) :
        the_post();
        the_post_thumbnail();
        the_title();
    ?> <p>Nombre de couchages : <?php the_field('bed_count'); ?></p>
        <p>Prix : <?php the_field('night_price'); ?>€ / nuits</p>
    <?php
        the_taxonomies();
        the_content();

        $postId = get_the_ID();
        $gammePrix = get_the_terms($postId, 'room-price-range')[0]->term_id;
    endwhile;

    ?>
</div>

<div>
    <p>Autres chambres qui pourraient vous plaire</p>
    <div>
        <?php
        $args = array(
            'post_type' => 'smial',
            'post__not_in' => [$postId],
            'posts_per_page' => 3,
            'tax_query' => array(
                array(
                    'taxonomy' => 'room-price-range',
                    'field' => 'id',
                    'terms' => $gammePrix,
                ),
            ),
        );
        $query = new WP_Query($args);

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) {
            echo '<ul>';
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<li><a href="'.get_the_permalink().'">' . esc_html(get_the_title()) . '</a></li>';
            }
            echo '</ul>';
        } else {
            esc_html_e('Aucune chambre n\'a été trouvé');
        }

        wp_reset_postdata();
        ?>
    </div>
</div>


<?php get_footer(); ?>