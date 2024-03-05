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
            <a class="hidden booking_icon pl-7 uppercase lg:block" href="#book_meeting"
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
    <!-- Hero Section -->
    <section class="bg-[url('../images/hero_bg_mob.png')] lg:bg-[url('../images/hero_bg.png')] bg-cover bg-no-repeat pb-10 lg:pb-9 mt-[-88px]">
      <div class="container">
        <div class="flex flex-col gap-y-14 lg:gap-y-20">
          <div class="flex flex-col gap-y-10 max-w-[660px]">
            <h1 class="font-bold text-[40px] lg:text-5xl tracking-[-0.075rem] leading-[60px] lg:leading-[65px] lg:tracking-[-0.094rem] pt-28 lg:pt-36">
              Albrechtsen Law er et dansk advokatfirma med speciale inden for
              erhvervsret
            </h1>
            <a href="#book_meeting" class="primary_btn w-fit flex gap-x-1 items-center leading-4 py-3.5 px-9 uppercase text-white">
              <span class="booking_light_icon block h-6 w-6"></span>
              Book et møde
            </a>
          </div>
          <div class="flex flex-wrap lg:gap-x-10 gap-y-4 lg:gap-y-8">
            <a class="menu-item flex flex-col cursor-pointer max-w-[360px] w-full border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5" href="<?php echo get_home_url(); ?>/company-structure">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="right-arrowup">
                <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                    <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                </mask>
                <g mask="url(#mask0_233_777)">
                    <rect width="24" height="24" fill="#D9D9D9"></rect>
                    <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                </g>
              </svg>
              <p class="text-xl">Selskabsstruktur</p>
              <p class="text-sm leading-6 pr-5 lg:pr-28">Valg af selskabsform i forhold til bl.a. optimering af cash flow og skat samt fordeling af aktiviteter og risiko.</p>
            </a>
            <a class="menu-item flex flex-col cursor-pointer max-w-[360px] w-full border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5" href="<?php echo get_home_url(); ?>/capital-increases">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="right-arrowup">
                <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                    <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                </mask>
                <g mask="url(#mask0_233_777)">
                    <rect width="24" height="24" fill="#D9D9D9"></rect>
                    <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                </g>
              </svg>
              <p class="text-xl">Kapitalforhøjelser</p>
              <p class="text-sm leading-6 pr-5 lg:pr-28">Investeringsrunder og kapitalforhøjelser med kontant indskud, gældskonvertering eller apportindskud.</p>
            </a>
            <a class="menu-item flex flex-col cursor-pointer max-w-[360px] w-full gap-y-2.5 border-solid border-r-[1px] lg:border-none" href="<?php echo get_home_url(); ?>/contracts">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="right-arrowup">
                <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                    <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                </mask>
                <g mask="url(#mask0_233_777)">
                    <rect width="24" height="24" fill="#D9D9D9"></rect>
                    <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                </g>
              </svg>  
              <p class="text-xl">Kontrakter</p>
              <p class="text-sm leading-6 pr-5 lg:pr-28">Ejeraftaler, handelsbetingelser, samarbejdsaftaler, låneaftaler, overdragelsesaftaler, erhvervslejekontrakter mv.</p>
            </a>
            <a class="menu-item flex flex-col cursor-pointer max-w-[360px] w-full border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5" href="<?php echo get_home_url(); ?>/warrant-programs">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="right-arrowup">
                <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                    <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                </mask>
                <g mask="url(#mask0_233_777)">
                    <rect width="24" height="24" fill="#D9D9D9"></rect>
                    <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                </g>
              </svg>
              <p class="text-xl">Warrantprogrammer</p>
              <p class="text-sm leading-6 pr-5 lg:pr-28">Warrants, medarbejderaktier og andre bonusprogrammer. Rådgivning om etablering, administration, eksekvering og skat.</p>
            </a>
            <a class="menu-item flex flex-col cursor-pointer max-w-[360px] w-full border-r-zinc-200 border-solid border-r-[1px] gap-y-2.5" href="<?php echo get_home_url(); ?>/shutdown">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="right-arrowup">
                <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                    <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                </mask>
                <g mask="url(#mask0_233_777)">
                    <rect width="24" height="24" fill="#D9D9D9"></rect>
                    <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                </g>
              </svg>
              <p class="text-xl">Nedlukning</p>
              <p class="text-sm leading-6 pr-5 lg:pr-28">Kontrollerede nedlukning af selskaber ved frivillig likvidation eller betalingserklæring.</p>
            </a>
            <a class="menu-item flex flex-col cursor-pointer max-w-[360px] w-full gap-y-2.5 border-solid border-r-[1px] lg:border-none" href="<?php echo get_home_url(); ?>/other-services">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="right-arrowup">
                <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                    <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                </mask>
                <g mask="url(#mask0_233_777)">
                    <rect width="24" height="24" fill="#D9D9D9"></rect>
                    <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                </g>
              </svg>  
              <p class="text-xl">Andre ydelser</p>
              <p class="text-sm leading-6 pr-5 lg:pr-28">Stiftelse af selskaber, omdannelse til ApS, selskabsændringer, ansættelseskontrakter, gældsrådgivning, konkursrådgivning.</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- About ME Section-->
    <section id="about_me" class="py-10 lg:pt-20 lg:pb-24">
      <div class="container">
        <div class="flex flex-col gap-y-7 lg:flex-row lg:gap-x-24">
          <img class="hidden w-full max-w-[500px] lg:block" src="<?php echo get_template_directory_uri(); ?>/build/images/rasmus_foto.png" alt="rasmus_photo">
          <img class="lg:hidden w-full max-w-[350px]" src="<?php echo get_template_directory_uri(); ?>/build/images/rasmus_foto_mob.png" alt="rasmus_photo">
          <div class="flex flex-col gap-y-5 lg:gap-y-8">
            <div class="flex flex-col gap-y-5 lg:gap-y-3">
              <h1 class="text-4xl leading-[50px] lg:text-5xl lg:leading-[72px]">Rasmus Albrechtsen</h1>
              <div class="flex flex-col text-lg leading-9 lg:text-xl lg:leading-10 font-medium">
                <a class="hover:underline text-blue-900 decoration-solid" href="mailto:ral@albrechtsenlaw.dk" title="email: ral@albrechtsenlaw.dk" target="_blank">ral@albrechtsenlaw.dk</a>
                <a class="hover:text-blue-900" href="tel:+4561483456" target="_blank">+45 61 48 34 56</a>
              </div>
            </div>
            <div class="flex flex-col gap-y-4 lg:gap-y-5 text-[16px] leading-6 lg:text-lg">
              <p>Rasmus Albrechtsen er direktør i Albrechtsen Law og er beskikket som advokat af Justitsministeriet og medlem af Advokatsamfundet.</p>
              <p>Rasmus rådgiver primært startups og små- og mellemstore virksomheder om juridiske erhvervsforhold.</p>
              <p>Bl.a. har Rasmus hjulpet flere startups med kapitalrejsninger, warrantprogrammer og udarbejdelse af kontrakter.</p>
              <p>Desuden har han undervist på Københavns Universitet i bl.a. konkurs- og panteret.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Calendly -->
    <section id="book_meeting" class="pt-10 pb-16 lg:pb-24">
      <div class="container">
        <div class="flex flex-col items-start lg:items-center gap-y-7 lg:gap-y-5">
          <h1 class="text-4xl leading-[50px] lg:text-[52px] lg:leading-[73px]">Du er altid velkommen til at kontakte os</h1>
          <h3 class="lg:text-2xl font-medium leading-7 text-lg lg:leading-[48px] text-black">Kontaktinformationer</h3>
          <div class="flex flex-col text-lg lg:text-xl leading-9 lg:leading-10 font-medium items-start lg:items-center">
            <a class="hover:underline text-blue-900 decoration-solid" href="mailto:ral@albrechtsenlaw.dk" title="email: ral@albrechtsenlaw.dk" target="_blank">ral@albrechtsenlaw.dk</a>
            <a class="hover:text-blue-900" href="tel:+4561483456" target="_blank">+45 61 48 34 56</a>
          </div>
        </div>
        <div class="calendly-container pt-10 lg:pt-0">
          <div class="calendly-inline-widget" data-url="https://calendly.com/rasmusa/meet-with-rasmus?hide_event_type_details=1&hide_gdpr_banner=1"></div>
        </div>
      </div>
    </section>
    <!-- Payment info -->
    <section class="py-10 lg:pt-20 lg:pb-24 bg-slate-200">
      <div class="container">
        <div class="flex flex-col gap-y-8 items-start lg:flex-row lg:gap-x-10">
          <div class="flex flex-col w-[350px] gap-y-5 lg:w-[560px]">
            <h3 class="text-lg leading-7 lg:leading-9 font-medium">Advokatansvarsforsikring</h3>
            <div class="flex flex-col gap-y-2 lg:gap-y-5">
              <p class="leading-8 text-black">Albrechtsen Law har tegnet ansvarsforsikring og stillet garanti i overensstemmelse med Advokatsamfundets regler.</p>
              <p class="leading-8 text-black">Ansvarsforsikringen og garantien er tegnet hos HDI Global Specialty SE, Langebrogade 3F, 1411 København K, Danmark, policenummer 156-76843577-30012.</p>
            </div>
          </div>
          <div class="flex flex-col gap-y-5">
            <h3 class="text-lg leading-7 lg:leading-9 font-medium">Klientkontooplysninger</h3>
            <div class="flex flex-col lg:gap-y-1 leading-8 text-black">
              <p>Reg.nr. 9070 </p>
              <p>Kontonr. 1639742349</p>
              <p>IBAN: DK7790701639742349</p>
              <p>SWIFT: VRAADK21</p>
              <p>Bank: Sparekassen Danmark</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="py-10 lg:py-20">
      <div class="container">
        <div class="flex flex-col text-slate-50 gap-y-14 justify-between lg:flex-row">
          <div class="flex flex-col justify-between">
            <a class="max-w-56" href="<?php echo get_home_url(); ?>">
              <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/build/images/logo_light.png" alt="logo" />
            </a>
            <span class="hidden lg:block">CVR-nr. 44581078</span>
          </div>
          <div class="flex flex-col gap-y-10">
            <div class="flex flex-col gap-y-5 lg:gap-x-16 font-medium text-lg lg:flex-row">
              <a href="<?php echo get_home_url(); ?>/terms-and-conditions">Forretningsbetingelser</a>
              <a href="<?php echo get_home_url(); ?>/personal-data-policy">Persondatapolitik</a>
              <a href="#book_meeting">Kontakt </a>
            </div>
            <div class="flex flex-col gap-y-5">
              <span class="uppercase text-3xl leading-[45px] lg:text-2xl lg:leading-9">København</span>
              <div class="flex flex-col gap-y-7 text-xl leading-[30px] lg:gap-x-20 lg:text-lg lg:flex-row">
                  <span class="pr-16">Vierdiget 32<br>
                  2791 Dragør Danmark</span>
                  <div class="flex flex-col">
                    <div>P:  
                      <a href="tel:+4561483456" target="_blank">+45 61 48 34 56</a>
                    </div>
                    <div>E:  
                      <a href="mailto:ral@albrechtsenlaw.dk" title="email: ral@albrechtsenlaw.dk" target="_blank">ral@albrechtsenlaw.dk</a>
                    </div>
                  </div>
              </div>
            </div>
            <a class="arrow_dawn pl-[28px]" 
            target="_blank" href="https://maps.app.goo.gl/YYweknrsNRTYFJhG6" >Google Maps</a>
          </div>
          <span class="lg:hidden">CVR-nr. 44581078</span>
        </div>
      </div>
    </footer>
    <!-- Modal menu -->
    <div id="modal" class="hidden fixed top-0 left-0 h-lvh w-full z-20">
      <div id="overlay" class="bg-zinc-300/40 h-full backdrop-blur-sm"></div>
      <nav
        class="absolute bg-slate-50 flex flex-col z-30 w-full lg:w-[600px] right-0 top-0 h-full px-5 lg:pl-[100px] pt-5 lg:pt-8 lg:pr-36 gap-y-10 lg:gap-y-24 animate-open-menu"
      >
        <button id="close" class="flex flex-wrap lg:gap-x-1 items-center cursor-pointer w-fit self-end">
          <svg class="w-8 h-8 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
            <path d="M8.53352 24.8717L7.12842 23.4666L14.5951 15.9999L7.12842 8.53327L8.53352 7.12817L16.0002 14.5948L23.4669 7.12817L24.872 8.53327L17.4053 15.9999L24.872 23.4666L23.4669 24.8717L16.0002 17.405L8.53352 24.8717Z" fill="#222932"/>
          </svg>
          <span class="uppercase hidden lg:inline">close</span>
        </button>
        <div id="menu-list" class="flex flex-col gap-y-10 items-start text-2xl">
          <div class="flex flex-col gap-y-5 items-start w-full max-w-[260px]">
            <a class="menu-item" href="<?php echo get_home_url(); ?>/specialties">Specialer</a>
            <nav class="flex flex-col gap-y-[18px] text-base w-full">
              <a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/company-structure">
                Selskabsstruktur
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                      <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                  </mask>
                  <g mask="url(#mask0_233_777)">
                      <rect width="24" height="24" fill="#D9D9D9"></rect>
                      <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                  </g>
                </svg>
              </a>
              <a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/capital-increases">
                Kapitalforhøjelser
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                      <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                  </mask>
                  <g mask="url(#mask0_233_777)">
                      <rect width="24" height="24" fill="#D9D9D9"></rect>
                      <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                  </g>
                </svg>
              </a>
              <a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/contracts">
                Kontrakter
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                      <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                  </mask>
                  <g mask="url(#mask0_233_777)">
                      <rect width="24" height="24" fill="#D9D9D9"></rect>
                      <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                  </g>
                </svg>
              </a>
              <a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/warrant-programs">
                Warrantprogrammer
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                      <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                  </mask>
                  <g mask="url(#mask0_233_777)">
                      <rect width="24" height="24" fill="#D9D9D9"></rect>
                      <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                  </g>
                </svg>
              </a>
              <a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/shutdown">
                Nedlukning
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                      <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                  </mask>
                  <g mask="url(#mask0_233_777)">
                      <rect width="24" height="24" fill="#D9D9D9"></rect>
                      <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                  </g>
                </svg>
              </a>
              <a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/other-services">
                Andre Ydelser
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <mask id="mask0_233_777" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="15" height="15">
                      <path d="M18.5 18.5L17 18.5L17 7.05385L5.55383 18.5L4.5 17.4462L15.9462 6.00002L4.5 6.00002L4.5 4.50005L18.5 4.50005L18.5 18.5Z" fill="#CCD9E1"></path>
                  </mask>
                  <g mask="url(#mask0_233_777)">
                      <rect width="24" height="24" fill="#D9D9D9"></rect>
                      <rect class="active-arrow" width="24" height="24" fill="#153396"></rect>
                  </g>
                </svg>
              </a>
            </nav>
          </div>
          <a class="menu-item" href="#about_me">Om</a>
          <a class="menu-item" href="#book_meeting">Kontakt</a>
          <a href="#book_meeting" class="mt-5 lg:hidden primary_btn w-fit flex gap-x-1 items-center text-[16px] leading-6 py-3.5 px-9 uppercase text-white">
            <span class="booking_light_icon block h-6 w-6"></span>
            Book et møde
          </a>
        </div>
      </nav>
    </div>
    <?php
      wp_footer();
    ?>
  </body>
</html>
