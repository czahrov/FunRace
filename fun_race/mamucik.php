<?php
	get_header();

	/*
	Template Name: mamucik
	*/
?>
<body id="oferta-single" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
      <?php get_template_part("template/menu"); ?>	
	<?php banner(); ?>
 </header>

     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- OFFER SINGLE -->
<div class="single grid">
    <div class="container padding">
        <div class="content">
            <?php
				the_post();
				the_content();
			?>
        </div>
        <div class="white-space-80"></div>
        <div class="content"></div>
        
        <!-- wrapper -->
        
        <div class="wrapper kafelki flex flex-justify-center flex-wrap">
			<h2 class='title base1'>
				Kursy akademi narciarskiej 
				<span>
					Mamucik
				</span>
			</h2>
			<?php
				$oferty = get_pages( array(
					'parent' => get_post()->ID,
					
				) );
				
				foreach( $oferty as $oferta ):
			?>
            <a href="<?php the_permalink( $oferta->ID ); ?>" class="element">
                <div class="inner">
                    <div class="picture" style='background-image:url( <?php echo get_the_post_thumbnail_url( $oferta->ID, 'large' ); ?> );'></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">
							<?php echo $oferta->post_title; ?>
						</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
							Zobacz ofertę
							<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
			<?php endforeach; ?>
		</div>
        
    </div>
</div>







<!--CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>