<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      wp_head();
    ?>
  </head>
  <body>
    <header class="sticky z-10 top-0 bg-transparent backdrop-blur-sm">
      <div class="container">
        <div class="flex justify-between items-center py-5 lg:py-7">
          <a class="max-w-56" href="<?php echo get_home_url(); ?>">
            <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if ( has_custom_logo() ) {
                echo '<img class="w-full" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
              }
            ?>
          </a>
          <div class="flex gap-x-10 relative">
            <a class="hidden booking_icon pl-7 uppercase lg:block" href="<?php echo get_home_url(); ?>/#book_meeting"
              >Book et møde</a
            >
            <button id="burger-btn" class="cursor-pointer flex gap-x-1">
              <svg  class="w-8 h-8 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                <path d="M4.6665 23.5128V21.5128H27.3331V23.5128H4.6665ZM4.6665 16.9999V15H27.3331V16.9999H4.6665ZM4.6665 10.4871V8.48718H27.3331V10.4871H4.6665Z" fill="#222932"/>
              </svg>
              <span class="hidden lg:inline">MENU</span>
            </button>
          </div>
        </div>
      </div>
    </header>