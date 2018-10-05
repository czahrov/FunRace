<?php
/*
	Template Name: Rezerwacja - formularz i mail
*/

if( !empty( $_POST ) ){
	$formularz = $_POST;
	if( DMODE ){
		echo "<!--FORMULARZ\r\n";
		print_r( $formularz );
		echo "\r\n-->";
	}
		
	if( !empty( $formularz['age'] ) ){
		$sended = false;
		$sended_msg = "Wiadomość została zatrzymana przez filtr antyspamowy.";
		
	}
	else{
		$mail = getMailer();
		
		$mail->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", "FUNRACE – formularz rezerwacji" );
		if( DMODE ){
			$mail->addAddress( 'sprytne@scepter.pl' );
		}
		elseif( DEVELOP ){
			$mail->addAddress( $formularz['Email_rezerwującego'] );
		}
		else{
			$mail->addAddress( "biuro@funrace.pl" );
			$mail->addAddress( $formularz['Email_rezerwującego'] );
			
		}
		
		/* sprawdzanie czy istnieje formatka maila i ładowanie jej */
		
		$mail_path = sprintf( '%s/php/rezerwacja/mail/%s.php', get_template_directory(), get_post()->post_title );
		
		if( file_exists( $mail_path ) ){
			include $mail_path;
			
		}
		else{
			$mail_path = sprintf( '%s/php/rezerwacja/mail/%s.php', get_template_directory(), get_post( get_post()->post_parent )->post_title );
			
			if( file_exists( $mail_path ) ){
				include $mail_path;
				
			}
			else{
				$mail_path = null;
				
			}
			
		}
		
		if( $mail_path !== null ){
			if( DMODE ){
				echo "<!--MAIL_BODY\r\n";
				print_r( $mail->Body );
				echo "\r\n-->";
				$sended = true;
				// $sended = $mail->send();
			}
			else{
				$sended = $mail->send();
				
			}
			
		}
		
		sendConfirm( $formularz['Email_rezerwującego'], $mail->Body );
		
	}
	
}

get_header();
?>
<body id="rezerwuj" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu"); ?>
		<div class="poster-sub poster-sub-rezerwuj poster-sub-rezerwuj-single flex flex-justify-center flex-items-center">
			<?php banner(); ?>
		</div>
		<div class="nav-act">
			<div class="grid">
				<div class="container">
					<div class="bar flex flex-column flex-row-mm">
						<div class="select anti-select">
							<div class="select-head flex flex-items-center flex-justify-center flex-justify-start-mm">
								<div class="title">
									<?php
										printf(
											'Wybrane szkolenie: %s',
											get_post()->post_title
										);
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!-- REZERWUJ-SINGLE -->
	<div class="rezerwuj-single">
		<div class="grid">
			<div class="container padding">
				<?php
					if( DMODE ){
						echo "<!--";
						print_r( $_POST );
						echo "-->";
					}
					
					if( isset( $sended ) ):
					$class = $sended?( "success" ):( "fail" );
				?>
				<div class='infobar <?php echo $class; ?>'>
					<?php
						echo $sended === true?( 'Wiadomość wysłana pomyślnie' ):( sprintf( 'Wysyłka maila nie powiodła się.<br>Przyczyna błędu: %s', !empty( $sended_msg )?( $sended_msg ):( $mail->ErrorInfo ) ) );
					?>
				</div>
				<?php endif; ?>
				<form method='post' class="wrapper flex flex-column flex-row-dm flex-justify-between flex-items-start">
					<?php get_template_part("template/rezerwuj-panel"); ?>
					<div class="details">
						<input type='hidden' name='Wydarzenie' value='<?php echo get_post()->post_title; ?>'>
						<?php
							/* Ładowanie formularza z pliku php */
							$form_path = sprintf( '%s/php/rezerwacja/form/%s.php', get_template_directory(), get_post()->post_title );
							$form_path_parent = sprintf( '%s/php/rezerwacja/form/%s.php', get_template_directory(), get_post( get_post()->post_parent )->post_title );
							
							if( DMODE ){
								printf(
									'<!--<div>%s<br>%s</div>-->',
									$form_path,
									$form_path_parent
									
								);
								
							}
							
							if( file_exists( $form_path ) ){
								include $form_path;
								
							}
							elseif( file_exists( $form_path_parent ) ){
								include $form_path_parent;
								
							}
							
						?>
						
						<div class="row regulamin row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Regulamin</div>
									<div class="person"></div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="zgody flex flex-wrap">
										<?php get_template_part('template/segment/checkbox','rezerwacja'); ?>
										<div class="buttons flex flex-wrap flex-column flex-items-center">
											<button type='submit' class="send flex flex-justify-center flex-items-center">
												wyślij zgłoszenie
											</button>
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div hidden>
							<input type='text' name='age'/>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--PARTNERS-->
	<?php get_template_part("template/partners-full"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>