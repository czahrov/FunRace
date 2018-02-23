<?php
	get_header();

	/*
	Template Name: ski toury
	*/
?>
<body id="ski-toury">
 <header>
      <?php get_template_part("template/menu"); ?>	
		<?php banner(); ?>
 </header>

    <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>