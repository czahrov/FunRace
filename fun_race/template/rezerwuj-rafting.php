<?php
/*
	Template Name: Rezerwuj rafting
*/

if( empty( $_POST ) ){
	header( "Location: " . home_url( 'lato/rezerwuj' ) );
	exit;
	
}

print_r( $_POST );

?>