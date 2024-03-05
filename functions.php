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
		wp_enqueue_script( 'calendly-script', 'https://assets.calendly.com/assets/external/widget.js', array(), $version, true );
		wp_enqueue_script('albrechtsenlaw-main', get_template_directory_uri()."/build/js/main.js", array(), $version, true);
	}

	add_action( 'wp_enqueue_scripts', 'albrechtsenlaw_register_scripts');

	// Add Google Tag Manager code in <head>
	add_action( 'wp_head', 'google_tag_manager_head' );
	function google_tag_manager_head() { ?>
	
		<!-- Google Tag Manager -->
		<!-- Paste here your google tag snippet -->
		<!-- End Google Tag Manager -->

	<?php }


	// Add Google Tag Manager code immediately below opening <body> tag
	add_action( 'genesis_before', 'google_tag_manager_body' );
	function google_tag_manager_body() { ?>
	
		<!-- Google Tag Manager (noscript) -->
		<!-- Paste here noscript snippet -->
		<!-- End Google Tag Manager (noscript) -->

	<?php }

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