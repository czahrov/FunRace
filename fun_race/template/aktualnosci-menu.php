<div class="nav-act">
	<div class="grid">
		<div class="container">
			<div class="bar flex flex-column flex-row-mm">
				<div class="select">
					<div class="select-head flex flex-items-center flex-justify-center flex-justify-start-mm">
						<div class="title">Lista kategorii</div>
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
						</div>
					</div>
					<div class="select-options">
						<a class="option flex-justify-center flex-justify-start-mm" href="<?php echo queryModify( array( 'cat' => null ) ); ?>">
							Wszystkie
						</a>
						<?php
							$kategorie = get_terms( array(
								'taxonomy' => 'category',
								'child_of' => get_category_by_slug( sprintf( 'aktualnosci-%s', getSeason() ) )->cat_ID,
								'hide_empty' => false,
								
							) );
							
							if( DMODE ){
								echo "<!--";
								print_r( $kategorie );
								echo "-->";
								
							}
							
							foreach( $kategorie as $kategoria ):
						?>
						<a class="option flex-justify-center flex-justify-start-mm" href="<?php echo queryModify( array( 'cat' => $kategoria->term_id, 'item' => null ) ); ?>">
							<?php echo $kategoria->name; ?>
						</a>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="select">
					<div class="select-head flex flex-items-center flex-justify-center">
						<div class="title">Sezon</div>
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
						</div>
					</div>
					<div class="select-options">
						<a class="option flex-justify-center" href="<?php echo queryModify( array( 'season' => null ) ); ?>">
							Wszystkie
						</a>
						<?php
							$oldest = get_posts( array(
								'category_name' => sprintf( 'aktualnosci-%s', getSeason() ),
								'numberposts' => 1,
								'order' => 'ASC',
								'orderby' => 'date',
								
							) );
							
							$year_start = get_the_date( 'Y', $oldest->ID );
							$year_end = date( 'Y' );
							
							for( $i=$year_start; $i<=$year_end; $i++ ):
								$found = get_posts( array(
									'category_name' => sprintf( 'aktualnosci-%s', getSeason() ),
									'numberposts' => 1,
									'year' => $i,
									
								) );
								
								if( count( $found ) ):
						?>
						<a class="option flex-justify-center" href="<?php echo queryModify( array( 'season' => $i ) ); ?>">
							<?php printf( 'Sezon %u', $i ); ?>
						</a>
								
						<?
								endif;
							endfor;
						?>
					</div>
				</div>
				<div class="select">
					<?php
						switch( getSeason() ){
							case 'zima':
								$main = 'zimowy';
								$second = 'letni';
								$link = home_url( 'lato/aktualnosci' );
								
							break;
							case 'lato':
								$main = 'letni';
								$second = 'zimowy';
								$link = home_url( 'zima/aktualnosci' );
								
							break;
							
						}
						
					?>
					<div class="select-head flex flex-items-center flex-justify-center">
						<div class="title">
							<?php printf( 'Sezon %s', $main ); ?>
						</div>
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
						</div>
					</div>
					<a href="<?php echo $link ?>" class="select-options">
						<div class="option flex-justify-center">
							<?php printf( 'Sezon %s', $second ); ?>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>