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
    <header class="sticky top-0 bg-transparent">
      <div class="container">
        <div class="flex justify-between items-center py-7">
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
            <a class="booking_icon pl-7 uppercase" href="#book_meeting"
              >Book et møde</a
            >
            <button id="burger-btn" class="cursor-pointer pl-7 relative">
              <div class="absolute w-6 h-6 p-[3px] left-0">
                <div
                  class="w-[18px] h-[2px] absolute top-3 -mt-[1px] transition-all duration-300 before:transition-all before:duration-300 before:content-[''] before:bg-black before:h-[2px] before:w-[18px] before:absolute before:-translate-x-[9px] before:-translate-y-[6px] after:transition-all after:duration-300 after:content-[''] after:bg-black after:h-[2px] after:w-[18px] after:absolute after:-translate-x-[9px] after:translate-y-[6px] bg-black"
                ></div>
              </div>
              MENU
            </button>
          </div>
        </div>
      </div>
    </header>
    <section class="bg-[url('../images/hero_bg.png')] bg-cover bg-no-repeat pb-9 mt-[-88px]">
      <div class="container">
        <div class="flex flex-col gap-y-20">
          <div class="flex flex-col gap-y-10 max-w-[660px]">
            <h1 class="font-bold text-5xl leading-[65px] pt-36">
              Albrechtsen Law er et dansk advokatfirma med speciale inden for
              erhvervsret
            </h1>
            <a href="#book_meeting" class="booking_light_icon w-56 text-center py-3.5 pl-16 pr-8 bg-blue-900 bg-opacity-95 uppercase text-white">Book et møde</a>
          </div>
			 <div class="flex flex-wrap gap-x-10 gap-y-8">
				<div class="w-[360px] border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5">
					<p class="hero_arrow_upright text-xl">Selskabsstruktur</p>
					<p class="text-sm leading-6 pr-28">Bl.a. har Rasmus assisteret med frivillig nedlukning af mere end 250 selskaber</p>
				</div>
				<div class="w-[360px] border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5">
					<p class="hero_arrow_upright text-xl">Kapitalforhøjelser</p>
					<p class="text-sm pr-28">Bl.a. har Rasmus assisteret med frivillig nedlukning af mere end 250 selskaber</p>
				</div>
				<div class="w-[360px] gap-y-2.5">
					<p class="hero_arrow_upright text-xl">Kontrakter</p>
					<p class="text-sm pr-28">Bl.a. har Rasmus assisteret med frivillig nedlukning af mere end 250 selskaber</p>
				</div>
				<div class="w-[360px] border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5">
					<p class="hero_arrow_upright text-xl">Warrantprogrammer</p>
					<p class="text-sm pr-28">Bl.a. har Rasmus assisteret med frivillig nedlukning af mere end 250 selskaber</p>
				</div>
				<div class="w-[360px] border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5">
					<p class="hero_arrow_upright text-xl">Nedlukning</p>
					<p class="text-sm pr-28">Bl.a. har Rasmus assisteret med frivillig nedlukning af mere end 250 selskaber</p>
				</div>
				<div class="w-[360px] gap-y-2.5">
					<p class="hero_arrow_upright text-xl">Andreydelser</p>
					<p class="text-sm pr-28">Bl.a. har Rasmus assisteret med frivillig nedlukning af mere end 250 selskaber</p>
				</div>
			 </div>
        </div>
      </div>
    </section>
    <div id="modal" class="hidden fixed top-0 left-0 h-screen w-full z-10">
      <div id="overlay" class="bg-zinc-300/40 h-full backdrop-blur-sm"></div>
      <nav
        class="absolute bg-slate-50 flex flex-col z-10 w-[600px] right-0 top-0 h-full pl-[100px] pt-8 pr-36 gap-y-24 animate-open-menu"
      >
        <button
          id="close"
          class="close_icon pl-7 uppercase cursor-pointer w-fit self-end"
        >
          close
        </button>
        <div class="flex flex-col gap-y-10 items-start text-2xl">
          <div class="flex flex-col gap-y-5 items-start">
            <button>Specialer</button>
            <nav class="flex flex-col gap-y-[18px] text-base">
              <a href="/" class="cursor-pointer">Selskabsstruktur</a>
              <a href="/" class="cursor-pointer">Kapitalforhøjelser</a>
              <a href="/" class="cursor-pointer">Warrantprogrammer</a>
              <a href="/" class="cursor-pointer">Nedlukning</a>
              <a href="/" class="cursor-pointer">Andre Ydelser</a>
            </nav>
          </div>
          <button>Om</button>
          <button>Kontakt</button>
        </div>
      </nav>
    </div>
    <?php
      wp_footer();
    ?>
  </body>
</html>
