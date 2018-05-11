<?php
	preg_match( "~ids=\"([^\"]+)~", get_page_by_title('Zaufali nam')->post_content, $match );
	$ids = explode( ",", $match[1] );
	
?>

<!-- PARTNERS -->
<div class="partners grid">
	<div class="container">
		<h2>Zufali nam <span>i nie zawiedli się</span> </h2>
		<p>Otrzymane referencje są potwierdzeniem jakości naszych usług. Dołącz do grona zadowolonych klientów</p>
		<div id='partner_slider' class="wrapper flex">
		   <div class="view flex flex-items-center flex-nowrap">
				<?php foreach( $ids as $id ): ?>
				<div class="element">
					<div class="inner">
						<img src="<?php echo wp_get_attachment_image_url( $id, 'full' ); ?>">
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>