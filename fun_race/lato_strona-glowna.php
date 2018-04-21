<?php
	get_header();

	/*
	Template Name: lato
	*/
?>

<body class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu-lato"); ?>
	<div class="poster flex flex-items-center" id="slider-main">
		<?php mainSlider( 'lato/slider' ); ?>
		
	</div>
 </header>
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
	<?php get_template_part('template/segment', 'kafelki_ofertowe'); ?>
	
<!-- DLACZEGO FUNRACE -->
<?php get_template_part( 'template/segment/dlaczego' ); ?>

<?php get_template_part( 'template/segment/aktualnosci' ); ?>

<!-- NEWSLETTER -->
<?php get_template_part("template/newsletter-lato"); ?>
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>
