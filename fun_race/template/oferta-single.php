<?php
	/* Template Name: Oferta pojedyncza */

	get_header();
?>
<body id="oferta-single" class='<?php do_action( 'body_hook' ); ?>'>
	<?php if( DMODE ): ?>
	<!-- WP_POST
		<?php var_dump( get_post() ); ?>
	-->
	<!-- META
		<?php var_dump( get_post_meta( get_post()->ID ) ); ?>
	-->
	<?php endif; ?>
 <header>
    <?php get_template_part("template/menu"); ?>
	<?php banner(); ?>
 </header>

     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- OFFER SINGLE -->
<?php the_post(); ?>
<div class="single grid">
    <div class="container padding">
        <div class="content">
            <?php the_content(); ?>
        </div>
        <div class="white-space-40"></div>
		<?php //get_template_part('template/oferta-single-opis'); ?>
		<?php get_template_part('template/oferta-single-tabela'); ?>
		<?php get_template_part('template/oferta-single-tekst'); ?>
		<?php get_template_part('template/oferta-single-zakladki'); ?>
		<?php get_template_part('template/oferta-single-galeria'); ?>
		<?php get_template_part('template/oferta-single-kursy'); ?>
		<?php get_template_part('template/oferta-single-podobne'); ?>
		
    </div>
	
</div>
<?php
	if( get_post()->post_title == 'Centrum Testowe HEAD' ){
		get_template_part('template/formularz-rezerwacja-nart');
		
	}
?>



<!--CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>
