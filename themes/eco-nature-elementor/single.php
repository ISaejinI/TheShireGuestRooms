<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Eco Nature Elementor
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php if ( get_theme_mod('eco_nature_elementor_header_page_title',true)) : ?>
        <div class="headerimgbox-meta">
          <span><i class="far fa-clock"></i><?php esc_html_e(' Posted On ','eco-nature-elementor'); echo esc_attr(get_the_date()); ?></span>
        </div>
        <h1 class="my-3"><?php the_title(); ?></h1>
        <div class="headerimgbox-meta">
          <?php while ( have_posts() ) : the_post(); ?>
            <span><i class="far fa-user me-2"></i><?php the_author(); ?></span>
          <?php endwhile; ?>
          <span class="ms-3"><i class="far fa-comments me-2"></i> <?php comments_number( esc_attr('0', 'eco-nature-elementor'), esc_attr('0', 'eco-nature-elementor'), esc_attr('%', 'eco-nature-elementor') ); ?> <?php esc_html_e('comments','eco-nature-elementor'); ?></span>
        </div>
    <?php endif; ?>
    <?php if ( get_theme_mod('eco_nature_elementor_header_breadcrumb' , true)) : ?>
      <div class="crumb-box mt-3">
        <?php eco_nature_elementor_the_breadcrumb(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div id="content" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <?php
          while ( have_posts() ) :

            the_post();
            get_template_part( 'template-parts/content', 'post');

            wp_link_pages(
              array(
                'before' => '<div class="eco-nature-elementor-pagination">',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>'
              )
            );

            comments_template();
          endwhile;
        ?>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>