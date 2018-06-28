<?php
	$season = $_SESSION['currentSeason'];
	$licencje_root = get_page_by_path( sprintf( '%s/o-nas/licencje', $season ) );
	$licencje = get_pages( array(
		'parent' => $licencje_root->ID,
		'sort_order' => 'ASC',
		'sort_column' => 'menu_order, post_title',
		
	) );
	
	$team_root = get_page_by_path( sprintf( '%s/o-nas/team', $season ) );
	$team = get_pages( array(
		'parent' => $team_root->ID,
		'sort_order' => 'ASC',
		'sort_column' => 'menu_order, post_title',
		
	) );
	
?>

<div class="actual grid">
	<div class="container flex flex-column flex-row-mm flex-items-start">
		<?php if( $licencje_root !== null and !empty( $licencje ) ): ?>
		<div class="side no-shrink">
			<?php foreach( $licencje as $item ): ?>
			<a href="<?php echo wp_get_attachment_url( get_post_meta( $item->ID, 'dokument', true ) ); ?>" class="box theme-bg flex flex-column flex-justify-center" target="_blank">
			   <div class="content">
					<div class="licencje"><?php echo $item->post_title; ?></div>
					<div class="tag theme-color"><?php echo get_post_meta( $item->ID, 'subtitle', true ); ?></div>
					<div class="arrow flex flex-justify-end" style="background-image: url(<?php printf( '%s/img/arrow_%s.png', get_template_directory_uri(), $season === 'zima'?( 'orange' ):( 'blue' ) ); ?>);"></div>
				</div>
			</a>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
		
		<div class="main">
		   <div class="content">
			   <?php echo apply_filters( 'the_content', get_post()->post_content ); ?>
				<div class="white-space-100"></div>
			  
		   </div>
		   <?php if( $team_root !== null and !empty( $team ) ): ?>
			<div class="wrapper flex flex-justify-center flex-justify-between-ml flex-wrap">
				<?php foreach( $team as $item ): ?>
				 <div class="element">
					 <a class="inner"> 
					   
						 <div class="cover" style='background-image:url(<?php echo get_the_post_thumbnail_url( $item->ID, 'full' ); ?>)'></div>
						 <div class="label">
							 <div class="name"><?php echo $item->post_title; ?></div>
							 <div class="stand"><?php echo get_post_meta( $item->ID, 'rank', true ); ?></div>
							 <div class="flex more flex-items-center">
								 <div class="text">czyaj dalej</div>
								 <div class="rotate"><div class="arrow"></div></div>
							 </div>
						 </div>
						  <div class="about">
							  <?php echo apply_filters( 'the_content', $item->post_content ); ?>
						  </div>
					 </a>
				 </div>
				 <?php endforeach; ?>
			   
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
