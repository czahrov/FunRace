<?php
	get_header();

	/*
	Template Name: lato oferta
	*/
?>
<body id="oferta" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
     <?php get_template_part("template/menu"); ?>	
	<?php banner(); ?>
 </header>
 
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
    
<!-- OFFER -->
<div class="offer grid">
    <div class="container">
        <?php get_template_part( "template/oferta" ); ?>
    </div>
	<div style="padding-bottom: 90px;"></div>
</div>


<!--CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>