<?php
	get_header();

	/*
	Template Name: lato o-nas
	*/
?>
<body id="o-nas" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu-lato"); ?>	
	<?php banner(); ?>
		
 </header>
 
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- ACTUAL -->
<div class="actual grid">
    <div class="container flex flex-column flex-row-mm flex-items-start">
        <div class="main">
           <div class="content">
				<div class="sub-title">Kilka słów o FUN&amp;RACE</div>
				<div class="title">… czyli poznaj nas bliżej</div>
				<?php echo apply_filters( 'the_content', get_post_meta( get_post()->ID, 'kilka_slow', true ) ); ?>
				<div class="white-space-80"></div>
				<div class="sub-title">FUN&amp;RACE team</div>
				<div class="title">Zapraszamy do zapoznania się z naszą ofertą i do współpracy.</div>
				<?php echo apply_filters( 'the_content', get_post_meta( get_post()->ID, 'team', true ) ); ?>
				<div class="white-space-80"></div>
		  
           </div>
           <div class="wrapper flex flex-justify-center flex-justify-between-ml flex-wrap">
			<?php
				$pages = get_pages( array(
					'parent' => 264,
					'sort_order' => 'ASC',
					'sort_column' => 'menu_order, post_title',
					
				) );
				
				foreach( $pages as $item ):
			?>
				<div class="element">
					<a class="inner"> 
					<div class="cover" style='background-image:url(<?php echo get_the_post_thumbnail_url( $item->ID, 'full' ); ?>);'></div>
					<div class="label">
						<div class="name"><?php echo $item->post_title; ?></div>
						<div class="stand"><?php echo get_post_meta( $item->ID, 'rank', true ); ?></div>
						<div class="flex more flex-items-center">
							<div class="text">czyaj dalej</div>
							<div class="rotate"><div class="arrow"></div></div>
						</div>
					</div>
						<div class="about">
							<?php echo apply_filters( 'the_content', $item->post_content ); ?>
						</div>
					</a>
				</div>
                <?php endforeach; ?>
			</div>
        </div>
    </div>
</div>


<!--PARTNERS-->
<?php get_template_part("template/partners"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>