<?php
	/*
	Template Name: o-nas
	*/

	get_header();
?>
<body id="o-nas">
 <header>
    <?php get_template_part("template/menu"); ?>	
	<?php banner(); ?>
	
 </header>
 
 
	     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- ACTUAL -->
<div class="actual grid">
    <div class="container flex flex-column flex-row-mm flex-items-start">
        <div class="side no-shrink">
			<?php
				$pages = get_pages( array(
					'parent' => 219,
					'sort_order' => 'ASC',
					'sort_column' => 'menu_order, post_title',
					
				) );
				
				foreach( $pages as $item ):
			?>
            <a href="<?php echo wp_get_attachment_url( $item->ID ); ?>" class="box flex flex-column flex-justify-center" target="_blank">
               <div class="content">
                    <div class="licence"><?php echo $item->post_title; ?></div>
                    <div class="tag"><?php echo get_post_meta( $item->ID, 'subtitle', true ); ?></div>
                    <div class="arrow flex flex-justify-end"></div>
                </div>
            </a>
			<?php endforeach; ?>
           </div>
        <div class="main">
           <div class="content">
               <div class="title">Szkoła narciarska i snowboardowa fun&amp;race</div>
               <div class="sub-title">Z licencją SITN PZN</div>
               <?php echo apply_filters( 'the_content', get_post_meta( get_post()->ID, 'sitn_pzn', true ) ); ?>
                <div class="white-space-120"></div>
                <div class="title">Team Czyli</div>
               <div class="sub-title">Trzon naszej szkoły</div>
               <?php echo apply_filters( 'the_content', get_post_meta( get_post()->ID, 'trzon', true ) ); ?>
                <div class="white-space-100"></div>
              
           </div>
            <div class="wrapper flex flex-justify-center flex-justify-between-ml flex-wrap">
				<?php
					$data = get_pages( array(
						'sort_order' => 'ASC',
						'sort_column' => 'menu_order, post_title',
						'parent' => 193,
						
					) );
					
					foreach( $data as $item ):
				?>
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
        </div>
    </div>
</div>


<!--PARTNERS-->
<?php get_template_part("template/partners"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>