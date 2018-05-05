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
	
	$kafelki = get_pages( array(
		'child_of' => get_page_by_path( sprintf( '%s/oferta', getSeason() ) )->ID,
		'meta_key' => 'kafelek',
		// 'meta_value' => '1'		z niewiadomych przyczyn to nie działa w połączeniu z child_of
		'sort_order' => 'ASC',
		'sort_column' => 'menu_order',
		
	) );
	
	foreach( $kafelki as $kafelek ){
		if( get_post_meta( $kafelek->ID, 'kafelek', true ) == true ) $items[] = $kafelek;
		
	}
	
	$chunksOf3 = array_chunk( $items, 3 );
	
	$chunk_size = ceil( count( $chunksOf3 ) / 2 );
	$chunks = array_chunk( $chunksOf3, $chunk_size );
	
?>
<div class="intro grid">
	<?php if( DMODE ):?>
	<!--ITEMS
		<?php print_r( $items ); ?>
	-->
	<?php endif; ?>
	<div class="container flex flex-column flex-row-ds flex-items-start">
		<?php // paczka kafelków ?>
		<div class="col base1">
			<div class="inner flex flex-wrap">
				<div class="content base1">
					<?php
						// opis segmentu
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
					
					$item_data = array();
					
					$t1 = array(
						'title' => get_post_meta( $item->ID, 'title', true ),
						'subtitle' => get_post_meta( $item->ID, 'subtitle', true ),
						'page' => get_post_meta( $item->ID, 'page_id', true ),
						'img' => get_post_meta( $item->ID, 'img', true ),
					);
					
					$t2 = array(
						'title' => $item->post_title,
						'subtitle' => '',
						'page' => $item->ID,
						'img' => get_post_thumbnail_id( $item->ID ),
					);
					
					foreach( $t1 as $k => $v ){
						$item_data[$k] = empty( $v )?( $t2[$k] ):( $v );
						
					}
					
					// pojedynczy kafelek
				?>
				<div class="box base1 <?php echo $class_addon ?>">
					<a href="<?php echo get_the_permalink( $item_data['page'] ); ?>" class="inside">
						<div class="picture" style="background-image: url(<?php echo wp_get_attachment_url( $item_data['img'] ); ?>);"></div>
						<div class="cover flex flex-justify-center flex-items-center">
							<div class="link flex flex-justify-between flex-items-center">
								oferta 
								<span>
									<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"/>
								</span>
							</div>
						</div>
						<div class="label">
							<?php
								printf(
									"<h3>%s</h3>
									<p>%s</p>",
									$item_data['title'],
									$item_data['subtitle']
									
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
					
					$item_data = array_merge(
						array(
							'title' => $item->post_title,
							'subtitle' => '',
							'page' => $item->ID,
							'img' => get_the_post_thumbnail_url( $item->ID, 'large' ),
						),
						array(
							'title' => get_post_meta( $item->ID, 'title', true ),
							'subtitle' => get_post_meta( $item->ID, 'subtitle', true ),
							'page' => get_post_meta( $item->ID, 'page_id', true ),
							'img' => get_post_meta( $item->ID, 'img', true ),
						)
						
					);
					
				?>
				<div class="box base1 <?php echo $class_addon ?>">
					<a href="<?php echo get_the_permalink( $item_data['page'] ); ?>" class="inside">
						<div class="picture" style="background-image: url(<?php echo wp_get_attachment_url( $item_data['img'] ); ?>);"></div>
						<div class="cover flex flex-justify-center flex-items-center">
							<div class="link flex flex-justify-between flex-items-center">
								oferta 
								<span>
									<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"/>
								</span>
							</div>
						</div>
						<div class="label">
							<?php
								printf(
									"<h3>%s</h3>
									<p>%s</p>",
									$item_data['title'],
									$item_data['subtitle']
									
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