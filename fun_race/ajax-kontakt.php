<?php
/*
	Template Name: Ajax - Formularz kontaktowy
*/

// if( !isAjax() ) header( "Location: " . home_url() );

$filters = array(
	'person' => array(
		'filter' => FILTER_SANITIZE_STRING,
		
	),
	'email' => array(
		'filter' => FILTER_VALIDATE_EMAIL,
		
	),
	'phone' => array(
		'filter' => FILTER_VALIDATE_REGEXP,
		'options' => array(
			'regexp' => "~^(\+\d+\s*)?(\(\d+\)\s*)?(\d+(\s|\-)*)+$~",
		),
		
	),
	'subject' => array(
		'filter' => FILTER_SANITIZE_STRING,
		
	),
	'message' => array(
		'filter' => FILTER_SANITIZE_STRING,
		
	),
	
);

$safe = filter_input_array( INPUT_POST, $filters );

echo json_encode( array(
	'status' => 'success',
	'msg' => 'ok',
	
) );
