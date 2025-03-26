<?php if(get_theme_mod('eco_nature_elementor_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'eco-nature-elementor' ),
			'next_text' => esc_html__( 'Next page', 'eco-nature-elementor' ),
		) );
	?>		
<?php endif; ?>