<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		wp_head();
	?>
</head>
<body class="min-h-screen text-base font-montserrat leading-normal">
    <header class="bg-white sticky top-0 z-10">
		<div class="container">
			<section class="py-4 flex justify-between items-center">
				<a href="<?php echo get_home_url(); ?>" class="logo max-w-[140px]">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) {
							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						} else {
							echo '<h1>' . get_bloginfo('name') . '</h1>';
						}
					?>
				</a>
				<div>
					<button
					id="hamburger-button"
					class="md:hidden cursor-pointer relative w-8 h-8 p-1"
					>
					<div
						class="w-6 h-1 rounded absolute top-4 -mt-0.5 transition-all duration-300 before:transition-all before:duration-300 before:content-[''] before:bg-black before:h-1 before:rounded before:w-6 before:absolute before:-translate-x-3 before:-translate-y-2 after:transition-all after:duration-300 after:content-[''] after:bg-black after:h-1 after:rounded after:w-6 after:absolute after:-translate-x-3 after:translate-y-2 bg-black"
					></div>
					</button>
					<nav class="hidden md:flex items-center space-x-5 main-menu text-sm" aria-label="main">
						<?php
							$menuParameters = array(
								'menu' => 'mobile',
								'container'       => false,
								'walker' => new Desktop_Walker(),
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'theme_location' => 'mobile',
								'fallback_cb' => false,
							);
							
							wp_nav_menu( $menuParameters );

						?>
						<?php 
							$langMenuParameters = array(
								'menu' => 'lang',
								'container'       => 'nav',
								'container_class' => 'lang_switcher',
								'container_id' => 'lang_switcher',
								'walker' => new Desktop_Walker(),
								'items_wrap'      => '%3$s',
								'theme_location' => 'lang',
								'fallback_cb' => false,
							);
							
							wp_nav_menu( $langMenuParameters );
						?>
					</nav>
				</div>
			</section>
		</div>
		<section id="mobile-menu" class="w-full flex-col justify-center py-10 bg-white animate-close-menu hidden">
			<nav class="flex flex-col items-center" aria-label="mobile">
				<?php
					$menuParameters = array(
						'menu' => 'mobile',
						'container'       => false,
						'walker' => new Mobile_Walker(),
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'theme_location' => 'mobile',
						'fallback_cb' => false,
					);
					
					wp_nav_menu( $menuParameters );
				?>

				<?php 
					$langMenuParameters = array(
						'menu' => 'lang',
						'container'       => 'nav',
						'container_class' => 'mob_lang_switcher w-full justify-center flex',
						'container_id' => 'mob_lang_switcher',
						'walker' => new Desktop_Walker(),
						'items_wrap'      => '%3$s',
						'theme_location' => 'lang',
						'fallback_cb' => false,
					);
					
					wp_nav_menu( $langMenuParameters );
				?>
			</nav>
		</section>
    </header>
	<!-- <?php
		wp_nav_menu(
			array(
				'menu' => 'primary',
				'container' => '',
				'theme_location' => 'primary',
				'items_wrap' => '<nav class="flex flex-col items-center" aria-label="mobile">%3$s</nav>'
			)
		);
	?> -->