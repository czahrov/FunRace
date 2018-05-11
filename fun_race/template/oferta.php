<?php
	$oferta_root = get_page_by_path( sprintf( '%s/oferta', getSeason() ) );
	$oferty = get_pages( array(
		'parent' => $oferta_root->ID,
		
	) );
	
	foreach( $oferty as $oferta ):
?>
<div class="row flex flex-column flex-row-ml">
	<a href="<?php the_permalink( $oferta->ID ); ?>" class="destiny base1 base2-ml">
		<div class="cover" style='background-image:url( <?php echo get_the_post_thumbnail_url( $oferta->ID, 'large' ); ?> )'></div>
		<h3>
			<?php echo $oferta->post_title; ?>
		</h3>
		<div class="link flex">
			<div class="text">Czytaj więcej</div>
			<div class="rotate">
				<img src="<?php printf( '%s/img/arrow_%s.png', get_template_directory_uri(), getSeason() === 'zima'?( 'orange' ):( 'blue' ) ); ?>" alt="arrow">
			</div>
		</div>
	</a>
	<div class="description base1 base2-ml">
		<p>
			<?php echo apply_filters( 'the_content', get_post_meta( $oferta->ID, 'zajawka', true ) ); ?>
		</p>
	</div>
</div>
<?php endforeach; ?>