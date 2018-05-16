<?php
	/*
	Template Name: Rezerwacja - główna
	*/

	get_header();
?>
<body id="rezerwuj" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu"); ?>	
		
	<?php banner(); ?>
	<?php rezerwujMenu( getSeason() ); ?>
		
 </header>
 
 
    <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
	
<!-- REZERWUJ -->

<div class="rezerwuj">
    <div class="grid">
        <div class="container padding">
           <div class="content flex flex-column flex-items-center">
                <?php echo apply_filters( 'the_content', get_post()->post_content ); ?>
            </div>
        </div>
    </div>
</div>



<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>