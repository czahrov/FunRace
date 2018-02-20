<?php
	get_header();

	/*
	Template Name: ski toury
	*/
?>
<body id="ski-toury">
 <header>
      <?php get_template_part("template/menu"); ?>	
		
	<div class="poster-sub poster-single flex flex-justify-center flex-items-end">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Ski toury / Rakiety śnieżne</span></h2>
		</div>
	</div>
 </header>

    <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>