<?php
/*
	Template Name: lato rezerwuj-rafting
*/

if( !empty( $_POST ) ){
	$formularz = $_POST;
	
	$mail = getMailer();
	
	$mail->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", "Formularz rezerwacji" );
	if( DMODE ){
		$mail->addAddress( 'sprytne@scepter.pl' );
	}
	else{
		$mail->addAddress( $formularz['Email_rezerwującego'] );
		// $mail->addAddress( "biuro@funrace.pl" );
	}
	$mail->Subject = "Rezerwacja raftingu";
	$mail->Body = sprintf(
'Dane organizatora
---
Imię: %s
Nazwisko: %s
Numer telefonu: %s
Adres e-mail: %s

Data i trasa spływu
---
Nazwa wydarzenia: %s
Data spływu (rrrr-mm-dd): %s
Trasa spływu: %s
Godzina spływu: %s

Liczba uczestników
---
Dorośli: %u
Dzieci: %u

Dodatkowy sprzęt
---
%s

Wiadomość
---
%s


Akceptuję regulamin FunRace: %s
Akceptuję politykę prywatności FunRace: %s

---
Mail wygenerowany automatycznie na stronie %s',
		$formularz['Imię_rezerwującego'],
		$formularz['Nazwisko_rezerwującego'],
		$formularz['Telefon_rezerwującego'],
		$formularz['Email_rezerwującego'],
		
		$formularz['Wydarzenie'],
		$formularz['dzień_spływu'],
		$formularz['trasa'],
		$formularz['godzina_spływu'],
		
		$formularz['Dorośli'],
		$formularz['Dzieci'],
		
		implode( ", ", $formularz['Dodatkowe_opcje'] ),
		
		$formularz['wiadomosc'],
		
		$formularz['Akceptuję_regulamin'] === 'on'?( 'tak' ):( 'nie' ),
		$formularz['Akceptuję_politykę_prywatności'] === 'on'?( 'tak' ):( 'nie' ),
		
		home_url()
		
	);

	if( DMODE ){
		echo "<!--";
		print_r( $mail->Body );
		echo "-->";
		$sended = true;
		// $sended = $mail->send();
		
	}
	else{
		$sended = $mail->send();
		
	}
	
}

get_header();
?>
<body id="rezerwuj-rafting" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu-lato"); ?>
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
						echo $sended === true?( 'Wiadomość wysłana pomyślnie' ):( "Wysyłka maila nie powiodła się.<br>Przyczyna błędu: {$mail->ErrorInfo}" );
					?>
				</div>
				<?php endif; ?>
				<form method='post' class="wrapper flex flex-column flex-row-dm flex-justify-between flex-items-start">
					<?php get_template_part("template/rezerwuj-panel"); ?>
					<div class="details">
						<div class="row rezerwujacy row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dane osobowe</div>
									<div class="person">rezerwującego</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<input type='hidden' name='Wydarzenie' value='<?php echo get_post()->post_title; ?>'>
									<div class="item imie flex flex-column base1 base2-mm">
										<label for="">Imię</label>
										<input type="text" id="" name="Imię rezerwującego" required>
									</div>
									<div class="item nazwisko flex flex-column base1 base2-mm">
										<label for="">Nazwisko</label>
										<input type="text" if="" name="Nazwisko rezerwującego" required>
									</div>
									<div class="item telefon flex flex-column base1 base2-mm">
										<label for="">Tel. Kontaktowy</label>
										<input type="tel" id="" name="Telefon rezerwującego" pattern="^\d[\d\s\-]+\d$" title="Dozwolone znaki: cyfry, spacje i myślniki" required>
									</div>
									<div class="item email flex flex-column base1 base2-mm">
										<label for="">Adres e-mail</label>
										<input type="email" name="Email rezerwującego" id="" required>
									</div>
									
								</div>
							</div>
						</div>
						<div class="row rezerwujacy row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Data i trasa</div>
									<div class="person">spływu</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="item dzien flex flex-column base1 base2-mm">
										<label for="">Dzień</label>
										<input type="date" id="" name="dzień spływu" required>
									</div>
									<div class="item godzina flex flex-column base1 base2-mm">
										<label for="">Godzina (wyjazd ze Szczawnicy)</label>
										<select name='godzina spływu' required>
											<option>10:00</option>
											<option>13:30</option>
											<option>16:30</option>
											
										</select>
									</div>
									<div class="item trasa flex flex-column base1 base2-mm">
										<label for="">Trasa spływu</label>
										<select name='trasa' required>
											<option>Sromowce Niżne - Szczawnica</option>
											
										</select>
									</div>
									
								</div>
							</div>
						</div>
						<div class="row uczestnicy row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Liczba uczestników</div>
									<div class="person">spływu</div>
								</div>
							</div>
							<div class="personal personal-user">
								<div class="person flex flex-wrap">
									<div class="item dorosli flex flex-column base1">
										<label for="">Dorośli</label>
										<input type="number" id="" name="Dorośli" min='0' step='1' required>
									</div>
									<div class="item dzieci flex flex-column base1">
										<label for="">Dzieci</label>
										<input type="number" id="" name="Dzieci" min='0' step='1' required>
									</div>
									
								</div>
								
							</div>
							
						</div>
						<div class="row dodatki row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Wypożycz dodatkowy</div>
									<div class="person">sprzęt</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="check-row polityka check2 flex">
										<input type="checkbox" id="gopro" name="Dodatkowe opcje[]" value='kamera GoPro'>
										<label for="gopro">Wypożyczenie kamera GoPro</label>
									</div>
									<div class="flex flex-wrap">
										<label for="pianka">Wypożyczenie pianki neoprenowej ( dostępne rozmiary: M, L, XL )</label>
										<select id='pianka' name='Dodatkowe opcje[]'>
											<option value=''></option>
											<option value='Pianka neoprenowa M'>rozmiar M</option>
											<option value='Pianka neoprenowa L'>rozmiar L</option>
											<option value='Pianka neoprenowa XL'>rozmiar XL</option>
										</select>
										
									</div>
									
								</div>
							</div>
						
						</div>
						<div class="row informacje row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dodatkowe</div>
									<div class="person">informacja</div>
								</div>
							</div>
							<div class="personal personal-user">
								<div class="person flex flex-wrap">
									<div class="item area wiadomosc flex flex-column base1">
										<label for="">Wiadomość</label>
										<textarea name='wiadomosc' style='height:200px;'></textarea>
									</div>
									
								</div>
								
							</div>
							
						</div>
						
						<div class="row regulamin row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Regulamin</div>
									<div class="person"></div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class='zgody'>
										<div class="check-row regulamin check2 flex">
											<input type="checkbox" id="statute" name="Akceptuję regulamin" required>
											<label for="statute">Akceptuję regulamin</label>
											<a href="<?php echo home_url(); ?>">regulamin</a>
										</div>
										<div class="check-row polityka check2 flex">
											<input type="checkbox" id="privacy" name="Akceptuję politykę prywatności" required>
											<label for="privacy">Akceptuję politykę prywatności FunRace</label>
											<a href="#">polityka prywatności</a>
										</div>
										
									</div>
									<div class="buttons flex flex-wrap flex-column flex-items-center">
										<button type='submit' class="send flex flex-justify-center flex-items-center">
											wyślij zgłoszenie
										</button>
										
									</div>
									
								</div>
							</div>
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