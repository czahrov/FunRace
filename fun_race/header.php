<?php
	session_start();
	
	/* if( !checkAccess() ){
		include 'wbudowie.php';
		exit;
		
	} */
	
	$infix = DMODE?( "" ):( ".min" );
	$buster = DMODE?( time() ):( false );
	
	wp_enqueue_style( "fonts", get_template_directory_uri() . "/css/fonts{$infix}.css", array(), $buster );
	wp_enqueue_style( "font-awesome", get_template_directory_uri() . "/css/font-awesome.min.css", array() );
	wp_enqueue_style( "facepalm", get_template_directory_uri() . "/css/facepalm{$infix}.css", array(), $buster );
	wp_enqueue_style( "style", get_template_directory_uri() . "/style{$infix}.css", array(), $buster );
	wp_enqueue_style( "override", get_template_directory_uri() . "/css/override{$infix}.css", array(), $buster );
	
    // wp_enqueue_script( "google_repatcha", "https://www.google.com/recaptcha/api.js", array(), false, false );
    wp_enqueue_script( "google_maps", "https://maps.googleapis.com/maps/api/js?key=AIzaSyC7wAbhUOIL7TmcbI5B441KDINDoQW2H4I", array(), false, false );
	wp_enqueue_script( "jQ", get_template_directory_uri() . "/js/jquery.js", array(), false, true );
	wp_enqueue_script( "jQ_touchSwipe", get_template_directory_uri() . "/js/jquery.touchSwipe.min.js", array( 'jQ' ), false, true );
	wp_enqueue_script( "gMap3", get_template_directory_uri() . "/js/gmap3{$infix}.js", array( 'jQ', 'google_maps' ), $buster, true );
    wp_enqueue_script( "map", get_template_directory_uri() . "/js/map{$infix}.js", array( 'jQ' ,'gMap3' ), $buster, true );
	wp_enqueue_script( "classie", get_template_directory_uri() . "/js/classie{$infix}.js", array(), $buster, true );
	wp_enqueue_script( "CSS", get_template_directory_uri() . "/js/CSSPlugin.min.js", array(), false, true );
	wp_enqueue_script( "TweenLite", get_template_directory_uri() . "/js/TweenLite.min.js", array(), false, true );
	wp_enqueue_script( "TimelineLite", get_template_directory_uri() . "/js/TimelineLite.min.js", array(), false, true );
	wp_enqueue_script( "partnerzy", get_template_directory_uri() . "/js/partnerzy{$infix}.js", array( 'TweenLite' ), $buster, true );
    wp_enqueue_script( "main", get_template_directory_uri() . "/js/main{$infix}.js", array( 'jQ', 'TweenLite', 'TimelineLite' ), $buster, true );
	
	if( getSeason() !== null ){
		$_SESSION['currentSeason'] = getSeason();
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title><?php wp_title("",true); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<?php wp_head(); ?>
	</head>
	
	