<?php /* Template Name: Landing page */ ?>

<?php
	get_header();
?>
	<!-- Hero Section -->
	<section class="bg-[url('../images/bg_leading_mob.png')] lg:bg-[url('../images/bg_leading.png')] bg-left-bottom lg:bg-[bottom_left_510px] bg-no-repeat lg:pb-[86px] pb-[220px] mt-[-88px]">
      <div class="container">
        <div class="flex flex-col gap-y-14 lg:gap-y-20">
          <div class="flex flex-col gap-y-7 lg:gap-y-10 max-w-[600px]">
            <h1 class="font-bold text-3xl lg:text-5xl tracking-[-0.075rem] leading-[60px] lg:leading-[65px] lg:tracking-[-0.094rem] pt-32 lg:pt-36">
            Kapitalforhøjelser
            </h1>
            <p class="text-base lg:text-2xl lg:leading-8 lg:pt-16">Advokat, Rasmus Albrechtsen, har assisteret startups og investorer med gennemførelse af kapitalforhøjelser for et samlede trecifret millionbeløb.</p>
            <a href="#book_meeting" class="primary_btn w-fit flex gap-x-1 items-center  mt-3 lg:mt-0 leading-4 py-3.5 px-9 uppercase text-white">
              <span class="booking_light_icon block h-6 w-6"></span>
              Book et møde
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Operating environment Section-->
    <section id="environment" class="py-10 lg:py-14">
      <div class="container">
        <div class="flex flex-col  gap-y-10 lg:flex-row lg:gap-x-36">
            <div class="flex flex-col gap-y-5 lg:gap-y-10  lg:pt-7">
               <h1 class="text-xl">Rasmus har i flere år rådgivet om alle juridiske forhold ved investeringsrunder, herunder bl.a. cap table, investeringsaftale, ejeraftale, key man clause, syndikeringer, downrunder, gældskonverteringer og garantier.</h1>
               <div class="flex flex-col gap-y-[10px] lg:gap-y-5 text-base">
                  <span>Albrechtsen Law assisterer med alle juridiske forhold vedrørende kapitalforhøjelser og investeringsrunder, herunder:</span>
                  <ul class="legal_items flex flex-col gap-y-3 list-disc pl-4">
                     <li>Interne og eksterne kapitalrejsninger</li>
                     <li>Udarbejdelse af investeringsdokumenter, f.eks. investeringsaftale, ejeraftale, garantikatalog</li>
                     <li>Investeringsformer og -vilkår, herunder investering i trancher og syndikeringer, garantier og indeståelser</li>
                     <li>Key man clauses, lock up-periode, retsstilling ved ophør af founders ansættels
                     <li>Cap table, udvanding og majoritets- og minoritetsbeskyttelse</li>
                     <li>Gennemførelse og registrering af kapitalforhøjelser og investeringsrunder</li>
                  </ul>
               </div>
            </div>
            <img class="hidden w-full max-w-[460px] lg:block" src="<?php echo get_template_directory_uri(); ?>/build/images/environment_photo.png" alt="environment_photo">
            <img class="lg:hidden w-full max-w-[350px]" src="<?php echo get_template_directory_uri(); ?>/build/images/environment_photo_mob.png" alt="environment_photo_mob">
        </div>
      </div>
    </section>
    <?php the_content(); ?>
    <!-- Form -->
    <section id="book_meeting" class="pt-14 pb-24">
      <div class="container">
         <div>
            <h3 class="text-2xl lg:text-4xl lg:leading-[44px] font-bold text-black w-full max-w-[300px] lg:max-w-[840px] m-auto text-center">Udfyld formularen og bliv kontaktet af advokat,
               Rasmus Albrechtsen:</h3>
			   <?php echo do_shortcode( '[wpforms id="50" title="false"]' ); ?>
		</div>
	  </div>
	</section>
<?php
	get_footer();
?>