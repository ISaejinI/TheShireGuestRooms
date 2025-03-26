<?php

  $eco_nature_elementor_theme_custom_setting_css = '';

	// Global Color
	$eco_nature_elementor_theme_color = get_theme_mod('eco_nature_elementor_theme_color', '#558b2f');

	$eco_nature_elementor_theme_custom_setting_css .=':root {';
		$eco_nature_elementor_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($eco_nature_elementor_theme_color ).'!important;';
	$eco_nature_elementor_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$eco_nature_elementor_scroll_alignment = get_theme_mod('eco_nature_elementor_scroll_alignment', 'right');

	if($eco_nature_elementor_scroll_alignment == 'right'){
		$eco_nature_elementor_theme_custom_setting_css .='.scroll-up{';
			$eco_nature_elementor_theme_custom_setting_css .='right: 30px;!important;';
			$eco_nature_elementor_theme_custom_setting_css .='left: auto;!important;';
		$eco_nature_elementor_theme_custom_setting_css .='}';
	}else if($eco_nature_elementor_scroll_alignment == 'center'){
		$eco_nature_elementor_theme_custom_setting_css .='.scroll-up{';
			$eco_nature_elementor_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
		$eco_nature_elementor_theme_custom_setting_css .='}';
	}else if($eco_nature_elementor_scroll_alignment == 'left'){
		$eco_nature_elementor_theme_custom_setting_css .='.scroll-up{';
			$eco_nature_elementor_theme_custom_setting_css .='left: 30px;!important;';
			$eco_nature_elementor_theme_custom_setting_css .='right: auto;!important;';
		$eco_nature_elementor_theme_custom_setting_css .='}';
	}

	// Related Product

	$eco_nature_elementor_show_related_product = get_theme_mod('eco_nature_elementor_show_related_product', true );

	if($eco_nature_elementor_show_related_product != true){
		$eco_nature_elementor_theme_custom_setting_css .='.related.products{';
			$eco_nature_elementor_theme_custom_setting_css .='display: none;';
		$eco_nature_elementor_theme_custom_setting_css .='}';
	}	