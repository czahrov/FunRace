<?php
	get_header();

	/*
	Template Name: lato kontakt
	*/
?>
<body id="kontakt" class="<?php do_action( 'body_hook' ); ?>">
	<header>
		<?php get_template_part("template/menu"); ?>
		<?php banner(); ?>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!--  -->
	<?php get_template_part("template/kontakt"); ?>
	<!--PARTNERS-->
	<?php get_template_part("template/partners-full"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>