<?php
	$season = getSeason();
	$season_name = "aktualnosci-{$season}";
	
	if( $season !== false ){
		$posts = get_posts( array(
			'numberposts' => 4,
			'category_name' => $season_name,
			'order' => 'DESC',
			'orderby' => 'date',
			
		) );
		
	}
	
	if( $season !== false && count( $posts ) > 0 ):
	
?>
<div class="news grid">
	<div class="container">
		<h2>Sprawdź <span>co u nas słychać</span></h2>
		<div class="wrapper flex flex-column flex-row-mm flex-wrap-mm">
			<!--
			<?php if( DMODE ) print_r( $posts ); ?>
			-->
			<?php foreach( $posts as $post): ?>
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>);"></div>
					<a href="<?php
							printf(
								'aktualnosci?item=%u',
								$post->ID
							);
							
						?>" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">
								<?php echo get_post_time( 'd F Y', false, $post->ID, true ); ?>
							</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">
							<?php
								if( has_excerpt( $post->ID ) ){
									get_the_excerpt( $post->ID );
									
								}
								else{
									// $content = strip_tags( $post->post_content );
									// $content = preg_replace( array( '/<[^>]+>/' ), array( '' ), $content );
									$content = preg_replace( array( '/[^\w\d\sęóąśłżźćńĘÓĄŚŁŻŹĆŃ\!@#\$%\^\&\*\(\)\-_\+\=\|\:;\'",\.\/\?]/' ), ' ', strip_tags( $post->post_content ) );
									$content = str_replace( '  ', ' ', $content );
									preg_match( '/(?:\S+\s*){1,8}/', $content, $match );
									echo $match[0] . " (...)";
									echo "<!--";
									print_r( $match );
									echo "-->";
									
									
								}
								
							?>
						</div>
                        <a href="<?php
							printf(
								'%s?item=%u',
								home_url( sprintf( '%s/aktualnosci', getSeason() ) ),
								$post->ID
							);
							
						?>">
							czytaj dalej
							<span>
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
							</span>
						</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>