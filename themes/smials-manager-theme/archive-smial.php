<?php get_header(); ?>

<h1> Toutes nos chambres </h1>

<?php \SmialsManager\Filters::display(); ?>

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
    <div>
        <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail([150, 150], ['style' => 'object-fit: cover; width: 150px; height: 150px;']); ?>
            <p><?php the_title() ?></p>
            <p><?php the_excerpt() ?></p>
            <p>Nombre de couchages : <?php the_field('bed_count'); ?></p>
            <p><?php get_the_terms(get_the_ID(), 'room-price-range') ?></p>
        </a>
    </div>
<?php endwhile; ?>

<?php // twenty_twenty_one_the_posts_navigation(); ?>

<?php else : 
    esc_html_e('Aucune chambre n\'a été trouvé');
endif; ?>