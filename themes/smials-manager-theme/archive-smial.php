<?php get_header(); ?>

<h1> Toutes nos chambres </h1>

<?php \SmialsManager\Filters::display(); ?>

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
    <p><?php the_title() ?></p>
<?php endwhile; ?>

<?php // twenty_twenty_one_the_posts_navigation(); ?>

<?php else : 
    esc_html_e('Aucune chambre n\'a été trouvé');
endif; ?>