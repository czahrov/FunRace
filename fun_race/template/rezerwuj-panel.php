<?php
	$panel = apply_filters( 'the_content', get_post_meta( get_post()->ID, 'panel', true ) );
	
	if( !empty( $panel ) ):
?>
<div id='form-side' class='theme-bg'>
	<?php echo $panel; ?>
</div>
<?php endif; ?>