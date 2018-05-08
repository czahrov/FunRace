<?php
	$posts = get_posts( array(
		'numberposts' => 5,
		'cat' => empty( $_GET['cat'] )?( get_category_by_slug( sprintf( 'aktualnosci-%s', getSeason() ) )->cat_ID ):( $_GET['cat'] ),
		'year' => empty( $_GET['season'] )?( '' ):( $_GET['season'] ),
		
	) );
	
	$post = empty( $_GET['item'] )?( $posts[0] ):( get_post( $_GET['item'] ) );
	
?>
<div class="aktualnosci">
	<div class="grid">
		<div class="container padding">
			<div class="main flex flex-column flex-row-ml">
				<div class="post">
					<div class="post-pic" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post, 'full' ); ?>);"></div>
					<div class="content">
						<?php echo apply_filters( 'the_content', $post->post_content ); ?>
					</div>
					<?php get_template_part( 'template/segment/share' ); ?>
				</div>
				<div class="side">
					<div class="inner">
						<div class="head">
							<div class="info-bar flex flex-items-center">
								<div class="date">
									<?php echo date_i18n( 'd F Y', strtotime( $post->post_date ) ); ?>
								</div>
								<?php get_template_part( 'template/segment/share' ); ?>
							</div>
							<div class="title">
								<?php echo $post->post_title; ?>
							</div>
						</div>
						<div class="side-nav">
							<?php
								for( $i=0; $i<count( $posts ); $i++ ):
								$item = $posts[ $i ];
								if( $item->ID == $_GET['item'] ) continue;
							?>
							<a class="row flex flex-items-center" href='<?php echo queryModify( array( 'item' => $item->ID ) ); ?>'>
								<div class="content">
									<div class="date">
										<?php echo date_i18n( 'd F Y', strtotime( $item->post_date ) ); ?>
									</div>
									<div class="side-title">
										<?php echo $item->post_title; ?>
									</div>
								</div>
							</a>
							<?php endfor; ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>