<?php
/*
	[gallery columns="9" ids="525,521,518,498,496,470,472,486,452,455,459,468,494,489,447,444,442"]
*/
	if( get_post_meta( get_post()->ID, 'on_galeria', true ) == true ):
	$pattern = '~ids="([^"]+)"~';
	$subject = get_post_meta( get_post()->ID, 'galeria', true );
	preg_match_all( $pattern, $subject, $match );
	
?>
<div class='galeria flex flex-wrap flex-items-center'>
	<?php foreach( $match[1] as $ids ): ?>
	<?php foreach( explode( ",", $ids ) as $id ): ?>
	<div class='item base1 base2-mm base3-ml base4-ds base5-dm base6-dl' style="background-image:url( <?php echo wp_get_attachment_image_url( $id, 'medium' ); ?> );">
		<a class='hitbox' href="<?php echo wp_get_attachment_url( $id ); ?>" target="_blank"></a>
		
	</div>
	<?php endforeach; ?>
	<?php endforeach; ?>
</div>
<?php endif; ?>