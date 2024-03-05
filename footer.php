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
              <a href="<?php echo get_home_url(); ?>/#book_meeting">Kontakt </a>
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
          <a class="menu-item" href="<?php echo get_home_url(); ?>/#about_me">Om</a>
          <a class="menu-item" href="<?php echo get_home_url(); ?>/#book_meeting">Kontakt</a>
          <a href="<?php echo get_home_url(); ?>/#book_meeting" class="mt-5 lg:hidden primary_btn w-fit flex gap-x-1 items-center text-[16px] leading-6 py-3.5 px-9 uppercase text-white">
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