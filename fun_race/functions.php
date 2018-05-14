<?php
add_theme_support('post-thumbnails');
add_theme_support('widgets');

define( 'DEVELOP', true );
define( 'DMODE', isset( $_COOKIE[ 'sprytne' ] ) );

include __DIR__ . "/php/PHPMailer/PHPMailerAutoload.php";
include __DIR__ . "/php/Newsletter/Newsletter.php";

function getNL(){
	static $NL = null;
	
	if( $NL === null ){
		$NL = new Newsletter();
		
	}
	
	return $NL;
}

function getMailer(){
	static $mailer = null;
	
	if( $mailer === null ){
		$mailer = new PHPMailer();
		$mailer->Encoding = "base64";
		$mailer->CharSet = "utf-8";
		$mailer->setLanguage( 'pl' );
		
	}
	
	return $mailer;
}

register_sidebar( array(
	'id' => 'footer-1',
	'name' => 'Tekst w stopce',
	'before_widget' => '<div class="grid">',
	'after_widget' => '</div>',
	
) );

register_sidebar( array(
	'id' => 'kontakt',
	'name' => 'Kontakt - kafelki informacyjne',
	'description' => 'Dane wyświetlane w formie kafelków na stronie kontaktu',
	'before_widget' => '<div class="box"><div class="inner">',
	'after_widget' => '</div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	
) );

register_sidebar( array(
	'id' => 'kontakt-2',
	'name' => 'Kontakt - kafelki z kontaktem',
	'description' => 'Dane wyświetlane w formie kafelków na stronie kontaktu, pod kafelkami z informacjami',
	'before_widget' => '<div class="box"><div class="inner">',
	'after_widget' => '</div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	
) );

register_sidebar( array(
	'id' => 'oferta',
	'name' => 'Oferta - masz pytania?',
	'description' => 'Dane wyświetlane w formie kafelków na stronie ofert w segmencie z ciemnym tłem',
	'before_widget' => '<div class="item btn flex theme-bg">',
	'after_widget' => '</div>',
	
) );

// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '-';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    // $home_title         = 'Fun&amp;Race';
    $home_title         = get_bloginfo( 'name' );
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}

// dostęp do witryny
function checkAccess(){
	if( isset( $_GET[ 'sprytne' ] ) or isset( $_COOKIE[ 'sprytne' ] ) or isset( $_SESSION[ 'access' ] ) ){
		$_SESSION[ 'access' ] = true;
		return true;
		
	}
	else{
		return false;
		
	}
	
}

// generowanie danych do sekcji na stronie glownej
function dlaczegoFunRace( $season = null ){
	/* $ret = array(
		'Doświadczenie' => array(
			'icon' => '/img/icons/doswiadczenie.png',
			'text' => 'Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego',
		),
		'Sprzęt' => array(
			'icon' => '/img/icons/sprzet.png',
			'text' => 'Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego',
		),
		'Team' => array(
			'icon' => '/img/icons/team.png',
			'text' => 'Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego',
		),
		'Pomysł' => array(
			'icon' => '/img/icons/pomysl.png',
			'text' => 'Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego',
		),
		'Kompleksowa obsługa' => array(
			'icon' => '/img/icons/kompleksowa_obsluga.png',
			'text' => 'Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego',
		),
		
	); */
	
	$season = $season === null?( getSeason() ):( $season );
	$season_name = "sprawdz-dlaczego-{$season}";
	
	if( $season === false ) return false;
	
	$posts = get_posts( array(
		'category_name' => $season_name,
		'numberposts' => 5,
		'meta_key' => 'kolejność',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
		
	) );
	
	$ret = array();
	
	foreach( $posts as $post ){
		$ret[ $post->post_title ] = array(
			'icon' => get_the_post_thumbnail_url( $post->ID, 'medium' ),
			'text' => $post->post_content,
			
		);
		
	}
	
	return $ret;
}

// funkcja generująca slajder
function mainSlider( $path ){
	$pages = get_pages( array(
		'parent' => get_page_by_path( $path )->ID,
		'sort_order' => 'ASC',
		'sort_column' => 'menu_order, post_title',
		// 'number' => 0,
		
	) );
	
	foreach( $pages as $num => $item ){
		$link_title = get_post_meta( $item->ID, 'link_title', true );
		if( empty( $link_title ) ) $link_title = 'Sprawdź szczegóły';
		
		printf(
			'<div class="slide flex flex-column flex-justify-center %s">
				<div class="cover" style="background-image: url(%s);"></div>
				<div class="content">
					<h2>%s
						<span class="block">%s</span>
					</h2>
					<a href="%s" class="flex flex-items-center flex-justify-center">%s</a>
				</div>
			</div>',
			// $num === 0?( 'show' ):( '' ),
			'',
			get_the_post_thumbnail_url( $item->ID, 'full' ),
			get_post_meta( $item->ID, 'title', true ),
			get_post_meta( $item->ID, 'subtitle', true ),
			get_the_permalink( get_post_meta( $item->ID, 'link_url', true ) ),
			$link_title
			
		);
		
	}
	
	echo "<div class='pagin'>";
	for( $i = 1; $i <= count( $pages ); $i++ ){
		$t = $i === 1?( 'active' ):( '' );
		echo "<div class='item {$t}'></div>";
		
	}
	echo "</div>";
	
}

// funkcja generująca banner na podstronach
function banner(){
	
	printf(
		"<div class='poster-sub flex flex-justify-center flex-items-end'>
			<div class='cover' style='background-image:url(%s);'></div>
			<div class='filtr'></div>
			<div class='content'>
				<h2>%s<span class='block'>%s</span></h2>
			</div>
		</div>",
		get_the_post_thumbnail_url( get_post()->ID, 'full' ),
		get_bloginfo( 'name' ),
		get_post()->post_title
		
	);
	
}

// sprawdza czy do otwarcia strony użyto ajaxa
function isAjax(){
	return $_SERVER[ "HTTP_X_REQUESTED_WITH" ] === "XMLHttpRequest";
	
}

// dodawanie klas elementowi body ( lato/zima )
add_action( 'body_hook', function( $arg ){
	$postID = get_post()->ID;
	
	while( !in_array( get_post( $postID )->ID, array( 4, 6 ) ) ){
		$postID = get_post( $postID )->post_parent;
		
	}
	
	printf( " %s ", get_post( $postID )->post_name );
} );

// dodawanie slugu strony do klasy body
add_action( 'body_hook', function( $arg ){
	printf( ' %s', get_post()->post_name );
	
} );

// sprawdza czy dana strona jest podstroną lata, czy zimy
function getSeason(){
	// lato - id 4
	// zima - id 6
	$id = get_post()->ID;
	
	if( !in_array( $id, array( 0, 4, 6 ) ) ){
		$terminator = 0;
		while( $terminator < 100 and !in_array( get_post( $id )->post_parent, array( 0, 4, 6 ) ) ){
			$id = get_post( $id )->post_parent;
			$terminator++;
			
		}
		
		$id = get_post( $id )->post_parent;
		
	}
	
	
	switch( $id ){
		case 4:
			return 'lato';
		break;
		case 6:
			return 'zima';
		break;
		default:
			// strona nie jest podstoną ani lata, ani zimy
			return false;
		
	}
	
}

// generuje menu rezerwacji
function rezerwujMenu( $season = null ){
	if( $season === null ) return false;
	
/*
<div class='nav-act'>
	<div class='grid'>
		<div class='container'>
			<div class='bar flex flex-column flex-row-mm'>
				
				<div class='select'>
					<div class='select-head flex flex-items-center flex-justify-center flex-justify-start-mm'>
						<div class='title'>Rafting</div>
						<div class='icon'>
							<img src='<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png' alt='arrow'>
						</div>
					</div>
					
					<div class='select-options'>
						<a href='<?php echo home_url('lato/rezerwuj/rafting'); ?>' class='option flex-justify-center flex-justify-start-mm'>RAFTING na Dunajcu</a>
						
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</div>
*/
	
	echo <<<EOT
<div class='nav-act'>
	<div class='grid'>
		<div class='container'>
			<div class='bar flex flex-column flex-row-mm'>
EOT;
	
	$pages_main = get_pages( array(
		'parent' => get_page_by_path( "{$season}/rezerwuj" )->ID,
		
	) );
	
	
	foreach( $pages_main as $main ){
		
		printf(
			"<div class='select'>
					<div class='select-head flex flex-items-center flex-justify-center flex-justify-start-mm'>
						<div class='title'>%s</div>
						<div class='icon'>
							<img src='%s/img/arrow_small_white.png' alt='arrow'>
						</div>
					</div>",
			$main->post_title,
			get_template_directory_uri()
			
		);
		
		$pages_sub = get_pages( array(
			'parent' => $main->ID,
			
		) );
		
		echo "<div class='select-options'>";
		
		foreach( $pages_sub as $sub ){
			printf(
				"<a href='%s' class='option flex-justify-center flex-justify-start-mm'>
					%s
				</a>",
				get_the_permalink( $sub->ID ),
				$sub->post_title
				
			);
			
		}
		
		echo "</div>
			</div>";
		
	}
	
	echo <<<EOT
			</div>
		</div>
	</div>
</div>
EOT;
	
}

// modyfikuje segment query adresu URI
function queryModify( $arg = array() ){
	$ret =  http_build_query( array_merge(
		$_GET,
		$arg
	) );
	
	return empty( $ret )?( $_SERVER['REDIRECT_URL'] ):( "?{$ret}" );
	
}

// zwraca tablicę znaczników na mapie
function getMarkers(){
	$pins = get_posts( array(
		'category_name' => 'znacznik-na-mapie',
		'numberposts' => -1,
		
	) );

	$markers = array();

	foreach( $pins as $pin ){
		$marker = array();
		
		switch( get_post_meta( $pin->ID, 'typ_znacznika', true ) ){
			case 'adres':
				$marker = array_merge(
					$marker,
					array(
						'address' => get_post_meta( $pin->ID, 'adres', true ),
					)
					
				);
				
			break;
			case 'gps':
				$marker = array_merge(
					$marker,
					array(
						'position' => array(
							'lat' => (float)get_post_meta( $pin->ID, 'lat', true ),
							'lng' => (float)get_post_meta( $pin->ID, 'long', true ),
							
						),
					)
					
				);
			break;
			
		}
		
		$imgID = get_post_meta( $pin->ID, 'grafika', true );
		if( !empty( $imgID ) ){
			$marker = array_merge(
				$marker,
				array(
					'icon' => wp_get_attachment_image_url( $imgID ),
				)
				
			);
			
		}
		
		$marker = array_merge(
			$marker,
			array(
				'title' => $pin->post_title,
			)
			
		);
		
		$markers[] = $marker;
		
	}
	
	return $markers;
	
}
