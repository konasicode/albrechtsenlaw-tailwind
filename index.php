<?php
	get_header();
?>
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
        <div class="pt-10">
          <h3 class="text-[52px] text-black text-center">Kontakt os</h3>
          <?php echo do_shortcode( '[wpforms id="50" title="false"]' ); ?>
        </div>
      </div>
    </section>
<?php
	get_footer();
?>