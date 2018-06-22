<?php
/*
	Template Name: Ajax - Formularz kontaktowy
*/

// if( !isAjax() ) header( "Location: " . home_url() );

/* honeypot */
if( !empty( $_POST['age'] ) ){
	echo json_encode( array(
		'status' => 'fail',
		'msg' => 'Wiadomość została zablokowana przez filtr antyspamowy!',
		
	) );
}
else{
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
				'regexp' => "~^(\d+[\s\-]*)+\d$~",
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

	$mail = getMailer();

	$mail->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", "Formularz kontaktowy" );
	if( DMODE ){
		$mail->addAddress( 'sprytne@scepter.pl' );
	}
	elseif( DEVELOP ){
		$mail->addAddress( $safe['email'] );
	}
	else{
		$mail->addAddress( 'biuro@funrace.pl' );
	}
	
	$mail->addReplyTo( $safe['email'] );
	$mail->Subject = sprintf(
		'Nowa wiadomość: %s',
		$safe['subject']
		
	);
	$mail->Body = sprintf(
		'Wiadomość od: %s
Telefon: %s
Email: %s
Temat: %s
Treść wiadomości:
%s

---
Mail wygenerowany automatycznie na %s',
		$safe['person'],
		$safe['phone'],
		$safe['email'],
		$safe['subject'],
		$safe['message'],
		home_url()
		
	);

	if( DMODE ){
		// echo "<!-- {$mail->Body} -->";
		$sended = $mail->send();
		// $sended = true;
		
	}
	else{
		$sended = $mail->send();
		
	}

	if( $sended ){
		echo json_encode( array(
			'status' => 'success',
			'msg' => 'Mail wysłany pomyślnie',
			
		) );
		
	}
	else{
		echo json_encode( array(
			'status' => 'fail',
			'msg' => 'Wysyłka maila nie powiodła się.',
			
		) );
		
	}
	
}


