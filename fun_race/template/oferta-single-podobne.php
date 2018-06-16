<?php
	if( !in_array( get_post()->post_parent, array( 89, 25 ) ) ):
	
	$siblings = get_pages( array(
		'parent' => get_post()->post_parent,
		'exclude' => get_post()->ID,
		'sort_column' => 'menu_order, post_title',
		'sort_order' => 'ASC',
		
	) );
	
	if( count( $siblings ) > 0 ):
?>
<div class="kafelki flex flex-justify-center flex-wrap">
	<h2 class='title base1'>
		<?php
			$oferty = get_post_meta( get_post()->ID, 'tekst_oferty', true );
			
			if( !empty( $oferty ) ){
				echo apply_filters( 'the_content', $oferty );
				
			}
			else{
				switch( get_post( get_post()->post_parent )->post_name ){
					case 'splywy-kajakowe':
						echo "Sprawdź pozostałe trasy <span class='theme-color'>spływów kajakowych</span>";
						
					break;
					case 'rafting':
						echo "Sprawdź pozostałe oferty <span class='theme-color'>Raftingu</span>";
					break;
					case 'szkola-kajakarstwa-gorskiego':
						echo "Sprawdź pozostałe oferty <span class='theme-color'>kajakarstwa górskiego</span>";
					break;
					default:
						echo "Sprawdź pozostałe oferty";
				}
				
			}
			
		?>
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