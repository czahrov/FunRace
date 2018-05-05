<?php
	if( !in_array( get_post()->post_parent, array( 89, 25 ) ) ):
	
	$siblings = get_pages( array(
		'parent' => get_post()->post_parent,
		'exclude' => get_post()->ID,
		
	) );
	
	if( count( $siblings ) > 0 ):
?>
<div class="kafelki flex flex-justify-center flex-wrap">
	<h2 class='title base1'>
		Kursy podobne do 
		<span class='theme-color'>
			<?php echo get_post()->post_title; ?>
		</span>
	</h2>
	<?php foreach( $siblings as $sib ): ?>
	<div class="item base1 base2-mm base3-ds base4-dm" style='background-image:url( <?php echo get_the_post_thumbnail_url( $sib->ID, 'large' ); ?> );'>
		<a href="<?php the_permalink( $sib->ID ); ?>" class="hitbox flex">
			<div class="btn">
				zobacz ofertę
			</div>
			
		</a>
		<div class="name flex flex-items-center flex-justify-center">
			<?php echo $sib->post_title; ?>
		</div>
		
	</div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
<?php endif; ?>