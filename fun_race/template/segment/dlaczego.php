<div class="reasons grid" style='background-image:url( <?php echo wp_get_attachment_image_url( get_post_meta( get_post()->ID, 'tło', true ), 'full' ); ?> );'>
	<div class="cover"></div>
	<div class="container">
		<h2>Sprawdź dlaczego warto <span>wybrać FUNRACE</span></h2>
		<div class="wrapper flex flex-justify-center">
			<?php
				$data = dlaczegoFunRace();
				
				foreach( $data as $name => $item ):
			?>
			<div class="element base1 base2-mm base3-ml base4-ds base5-dm">
				<div class="inner">
					<div class="icon flex flex-items-center flex-justify-center">
						<img src="<?php echo $item[ 'icon' ]; ?>" alt="<?php echo $name; ?>">
					</div>
					<h3><?php echo $name; ?></h3>
					<p><?php echo $item[ 'text' ]; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>