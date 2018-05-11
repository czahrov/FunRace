<?php
	get_header();

	/*
	Template Name: lato o-nas
	*/
?>
<body id="o-nas" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu"); ?>	
	<?php banner(); ?>
	
 </header>
 
 
	     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


	<!-- ACTUAL -->
    <?php get_template_part('template/onas'); ?>

<!--PARTNERS-->
<?php get_template_part("template/partners"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>