<?php
	get_header();

	/*
	Template Name: lato park linowy
	*/
?>
<body id="park-linowy" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu"); ?>		
	<?php banner(); ?>
 </header>

     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>



<!-- Mamucik -->
<div class="mamucik alpy">
    <div class="grid">
        <div class="container padding" style="border-bottom: 0;">
                
                
                
                
            
        </div>

    </div>
    </div>
    



<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>