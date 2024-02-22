<?php

	function albrechtsenlaw_theme_support(){
		add_theme_support( 'title-tag' );
	}

	add_action( 'after_setup_theme', 'albrechtsenlaw_theme_support' );

	$version = wp_get_theme()->get('Version');
	function albrechtsenlaw_register_styles(){
		wp_enqueue_style('albrechtsenlaw-style', get_template_directory_uri()."/build/css/style.css", array(), $version, 'all');
	}

	add_action( 'wp_enqueue_scripts', 'albrechtsenlaw_register_styles');

	function albrechtsenlaw_register_scripts(){
		wp_enqueue_script('albrechtsenlaw-main', get_template_directory_uri()."/build/js/main.js", array(), $version, true);
	}

	add_action( 'wp_enqueue_scripts', 'albrechtsenlaw_register_scripts');

	function albrechtsenlaw_custom_logo_setup() {
		$defaults = array(
			'height'               => 32,
			'width'                => 223,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'Legal Office ApS', '' ),
			'unlink-homepage-logo' => true, 
		);
		add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'albrechtsenlaw_custom_logo_setup' );

?>