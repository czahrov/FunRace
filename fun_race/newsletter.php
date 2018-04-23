<?php
/*
	Template Name: Newsletter - AJAX
*/

$news = getNL();

if( !empty( $_GET['validate'] ) ){
	
	if( $news->activate( $_GET['validate'] ) ){
		$msg = "Adres email został potwierdzony.<br>
		Witamy na pokładzie!";
		
	}
	else{
		$msg = "Adres email już istnieje";
		
	}
	
}
elseif( !empty( $_POST['register'] ) ){
	
	if( $news->register( $_POST['register'] ) ){
		$news->sendLink( $_POST['register'] );
		
		$msg =  "Email został pomyślnie zarejestrowany.<br>
		Wkrótce otrzymasz wiadomość email z linkiem aktywacyjnym.";
	}
	else{
		$msg =  "Rejestracja adresu email nie powiodła się.";
		
	}
	
}
elseif( !empty( $_GET['unreg'] ) ){
	
	if( $news->unregister( $_GET['unreg'] ) ){
		
		$msg =  "Email został pomyślnie wyrejestrowany.<br>
		Nie będziesz już otrzymywać od nas informacji o nowościach i promocjach.";
	}
	else{
		$msg =  "Wyrejestrowanie adresu email nie powiodło się.";
		
	}
	
}
elseif( isset( $_GET['janosik'] ) ){
	$msg = "Lista potwierdzonych adresów email:<br>" . implode( ", ", $news->printList() );
	
}
else{
	header( "Location: " . home_url() );
	exit;
	
}

get_header();

?>
<header>
	<?php get_template_part("template/menu-lato"); ?>
</header>
<?php
	printf(
		'<div id="newsletter">
			%s<br>
			<a href="%s" class="return">Powrót do strony głównej</a>
		</div>',
		$msg,
		home_url()
		
	);

?>
<?php
	get_footer();
	
?>