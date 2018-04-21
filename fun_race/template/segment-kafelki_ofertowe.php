<?php
	if( DMODE ){
		printf(
			"<!-- %s -->",
			__FILE__
		);
	}
	
	$kafelki_root = get_page_by_path( sprintf(
		"%s/kafelki-ofertowe",
		get_post()->post_name
		
	) );
	
	$items = get_pages( array(
		'parent' => $kafelki_root->ID,
		'sort_order' => 'ASC',
		'sort_column' => 'menu_order',
		
	) );
	
	$chunksOf3 = array_chunk( $items, 3 );
	
	$chunk_size = ceil( count( $chunksOf3 ) / 2 );
	$chunks = array_chunk( $chunksOf3, $chunk_size );
	
?>
<div class="intro grid">
	<div class="container flex flex-column flex-row-ds flex-items-start">
		<div class="col base1">
			<div class="inner flex flex-wrap">
				<div class="content base1">
					<?php
						printf(
							"<h2>%s
								<span class='block'>%s</span>
							</h2>
							<p>%s</p>",
							get_post_meta( $kafelki_root->ID, 'title', true ),
							get_post_meta( $kafelki_root->ID, 'subtitle', true ),
							get_post_meta( $kafelki_root->ID, 'content', true )
							
						);
						
					?>
				</div>
				<?php
					foreach( $chunks[1] as $chunk ): foreach( $chunk as $num => $item ):
					switch( $num % 3 ){
						case 1:
							$class_addon = 'base2-mm long';
						break;
						case 2:
							$class_addon = 'base2-mm long-two';
						break;
						default:
							$class_addon = '';
					}
					
				?>
				<div class="box base1 <?php echo $class_addon ?>">
					<a href="<?php echo get_the_permalink( get_post_meta( $item->ID, 'page_id', true ) ); ?>" class="inside">
						<div class="picture" style="background-image: url(<?php echo wp_get_attachment_url( get_post_meta( $item->ID, 'img', true ) ); ?>);"></div>
						<div class="cover flex flex-justify-center flex-items-center">
							<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
						</div>
						<div class="label">
							<?php
								printf(
									"<h3>%s</h3>
									<p>%s</p>",
									get_post_meta( $item->ID, 'title', true ),
									get_post_meta( $item->ID, 'subtitle', true )
									
								);
								
							?>
						</div>
					</a>
				</div>
				<?php endforeach; ?>
				<?php endforeach; ?>
				
			</div>
		</div>
		<div class="col col2 base1">
			<div class="inner flex flex-wrap">
				<?php
					foreach( $chunks[0] as $chunk ): foreach( $chunk as $num => $item ):
					switch( $num % 3 ){
						case 1:
							$class_addon = 'base2-mm long';
						break;
						case 2:
							$class_addon = 'base2-mm long-two';
						break;
						default:
							$class_addon = '';
					}
					
				?>
				<div class="box base1 <?php echo $class_addon ?>">
					<a href="<?php echo get_the_permalink( get_post_meta( $item->ID, 'page_id', true ) ); ?>" class="inside">
						<div class="picture" style="background-image: url(<?php echo wp_get_attachment_url( get_post_meta( $item->ID, 'img', true ) ); ?>);"></div>
						<div class="cover flex flex-justify-center flex-items-center">
							<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
						</div>
						<div class="label">
							<?php
								printf(
									"<h3>%s</h3>
									<p>%s</p>",
									get_post_meta( $item->ID, 'title', true ),
									get_post_meta( $item->ID, 'subtitle', true )
									
								);
								
							?>
						</div>
					</a>
				</div>
				<?php endforeach; ?>
				<?php endforeach; ?>
				
			</div>
		</div>
	
	</div>
	
</div>