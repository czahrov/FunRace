<?php
	get_header();

	/*
	Template Name: lato referencje
	*/
?>
<body id="referencje" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
	<?php get_template_part("template/menu"); ?>	
	<?php banner(); ?>
 </header>
 
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
	
<!-- REFERENCJE -->

<div class="referencje">
    <div class="grid">
        <div class="container padding">
            <div class="wrapper flex flex-wrap">
				<?php
					$pages = get_pages( array(
						'parent' => 91,
						'sort_order' => 'ASC',
						'cort_column' => 'menu_order, post_title',
						
					) );
					
					foreach( $pages as $item ):
				?>
				<a href="<?php echo wp_get_attachment_url( get_post_meta( $item->ID, 'dokument', true ) ); ?>" target="_blank" class="item base1 base2-mm base3-ds base4-dm">
					<div class="name">
						<div class="front-name"><?php echo $item->post_title; ?></div>
						<div class="cover-name">
							<div class="content flex flex-column">
								 <?php echo $item->post_title; ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
							</div>
						</div>
					</div>
					<div class="logo-type">
						<?php
							$img = wp_get_attachment_url( get_post_meta( $item->ID, 'logo', true ) );
							if( !empty( $img ) ):
						?>
							<img src="<?php echo $img; ?>" alt="<?php echo $item->post_title; ?>">
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/picture_empty.jpg" alt="<?php echo $item->post_title; ?>">
						<?php endif; ?>
					</div>
				</a>
                <?php endforeach; ?>
				
            </div>
            
        </div>
    </div>
	<div class="white-space-80"></div>
</div>




<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>