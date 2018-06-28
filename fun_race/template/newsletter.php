<?php
	$news = getNL();

	if( !empty( $_GET['validate'] ) ){
		
		if( $news->activate( $_GET['validate'], $_POST['season'] ) ){
			$msg = "Adres email został potwierdzony.<br>
			Witamy na pokładzie!";
			
		}
		else{
			$msg = "Adres email już istnieje";
			
		}
		
	}
	elseif( !empty( $_POST['register'] ) ){
		
		if( $news->register( $_POST['register'] ) ){
			$news->sendLink( $_POST['register'], $_POST['season'] );
			
			$msg =  "Email został pomyślnie zarejestrowany.<br>
			Wkrótce otrzymasz wiadomość email z linkiem aktywacyjnym.";
		}
		else{
			$msg =  "Ten adres został już zarejestrowany.";
			
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
	
?>

<div id='newsletter' class="newsletter grid">
    <div class="container">
        <h2>Zapisz się do naszego <span>newslettera</span></h2>
        <form method='post' action='#newsletter'>
            <div class="box flex flex-column flex-row-ms">
                <input type="email" id="email" name="register" placeholder="Wpisz swój adres e-mail:">
                <button type='submit' class="flex flex-items-center flex-justify-center">
					<div class="send">Wyślij</div>
					<div class="arrow">
						<?php
							printf(
								'<img src="%s/img/arrow_%s.png"/>',
								get_template_directory_uri(),
								getSeason() === 'lato'?( 'blue' ):( 'orange' )
							);
						?>
					</div>
				</button>
            </div>
			<input type='hidden' name='season' value='<?php echo getSeason(); ?>'>
        </form>
        <p>W każdej chwili możesz się z niego wypisać</p>
		<?php if( isset( $msg ) ): ?>
		<div class='msg'>
			<?php echo $msg; ?>
		</div>
		<?php endif; ?>
    </div>
</div>