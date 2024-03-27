<?php /* Template Name: Specialties page */ ?>

<?php
	get_header();
?>

<div class="container">
	<nav class="flex flex-col gap-y-[18px] text-base w-full py-10">
		<a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/company-structure">
		Selskabsstruktur
		</a>
		<a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/capital-increases">
		Kapitalforhøjelser
		</a>
		<a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/contracts">
		Kontrakter
		</a>
		<a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/warrant-programs">
		Warrantprogrammer
		</a>
		<a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/shutdown">
		Nedlukning
		</a>
		<a class="menu-item flex justify-between cursor-pointer max-w-[360px] w-full" href="<?php echo get_home_url(); ?>/other-services">
		Andre Ydelser
		</a>
	</nav>
</div>

<?php
	get_footer();
?>