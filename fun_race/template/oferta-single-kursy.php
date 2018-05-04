<?php
	$oferty = get_pages( array(
		'parent' => get_post()->ID,
		
	) );
	
	if( count( $oferty ) > 0 ):
?>
<div class="wrapper kafelki flex flex-justify-center flex-wrap">
	<h2 class='title base1'>
		Kursy
		<span class='theme-color'>
			<?php echo get_post()->post_title; ?>
		</span>
	</h2>
	<?php foreach( $oferty as $oferta ): ?>
	<div class="item base1 base2-mm base3-ds base4-dm" style='background-image:url( <?php echo get_the_post_thumbnail_url( $oferta->ID, 'large' ); ?> );'>
		<a href="<?php the_permalink( $oferta->ID ); ?>" class="hitbox flex">
			<div class="btn">
				zobacz ofertę
			</div>
			
		</a>
		<div class="name flex flex-items-center flex-justify-center">
			<?php echo $oferta->post_title; ?>
		</div>
		
	</div>
	<?php endforeach; ?>
	<!--
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
	-->
</div>
<?php endif; ?>