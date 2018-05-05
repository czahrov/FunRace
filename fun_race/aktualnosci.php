<?php
/*
Template Name: aktualnosci
*/
	get_header();
	
?>
<body id="aktualnosci" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu"); ?>
		<?php banner(); ?>
		<?php get_template_part("template/aktualnosci", "menu"); ?>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!-- AKTUALNOSCI -->
	<?php get_template_part("template/aktualnosci"); ?>
	<!--PARTNERS-->
	<?php get_template_part("template/partners"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>