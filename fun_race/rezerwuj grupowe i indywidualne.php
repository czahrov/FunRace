<?php
	/* Template Name: zima rezerwuj grupowe i indywidualne */
	
	if( !empty( $_POST ) ){
		$formularz = $_POST;
		
		if( !empty( $formularz['age'] ) ){
			$sended = false;
			$sended_msg = "Wiadomość została zablokowana przez filtr antyspamowy";
		}
		else{
			if( DEVELOP ){
				echo "<!--POST\r\n";
				print_r( $formularz );
				echo "\r\n-->";
			}
			
			$mail = getMailer();
			
			$mail->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", "FUNRACE – formularz rezerwacji" );
			if( DMODE ){
				$mail->addAddress( 'sprytne@scepter.pl' );
			}
			elseif( DEVELOP ){
				$mail->addAddress( $formularz['parent-email'] );
			}
			else{
				$mail->addAddress( "biuro@funrace.pl" );
				$mail->addAddress( $formularz['parent-email'] );
			}
			
			$mail->Subject = "Rezerwacja kursu: {$formularz['wydarzenie']}";
			
			$lista = "";
			for( $i=0; $i<count( $formularz['uczestnik_imię'] ); $i++ ){
				if( empty( $formularz['uczestnik_imię'][$i] ) ) continue;
				
				$lista .= sprintf(
'Uczestnik: %u
	Imię: %s
	Nazwisko: %s
	Pełnoletność: %s
	Uczestnik korzysta z wypożyczalni: %s
	%s
	
',
					$i + 1,
					$formularz['uczestnik_imię'][$i],
					$formularz['uczestnik_nazwisko'][$i],
					$formularz['uczestnik_wiek'][$i],
					
					( !empty( $formularz['uczestnik_stopa'][$i] ) and !empty( $formularz['uczestnik_wzrost'][$i] ) and !empty( $formularz['uczestnik_waga'][$i] ) )?('tak'):('nie'),
					( !empty( $formularz['uczestnik_stopa'][$i] ) and !empty( $formularz['uczestnik_wzrost'][$i] ) and !empty( $formularz['uczestnik_waga'][$i] ) )?( sprintf(
'	Długość stopy: %u cm
		Wzrost: %u cm
		Waga: %u kg',
					$formularz['uczestnik_stopa'][$i],
					$formularz['uczestnik_wzrost'][$i],
					$formularz['uczestnik_waga'][$i]
						
					) ):('')
					
					
				);
				
			}
			
			$mail->Body = sprintf(
'Dane uczestnika
---
Imię: %s
Nazwisko: %s
Numer telefonu: %s
Adres e-mail: %s

Informacje o kursie
---
Typ szkolenia: %s
Data odbycia się kursu (rrrr-mm-dd): %s do %s
Preferowana godzina rozpoczęcia: %s
Liczba godzin (dziennie): %s
Liczba uczestników: %u

Lista uczestników
---
%s

Wiadomość:
---
%s


Oświadczam, iż stan zdrowia zgłoszonego uczestnika/ów pozwala na udział w szkoleniu narciarskim/snowboardowym. : %s
Akceptuję regulamin FunRace: %s
Akceptuję politykę prywatności FunRace: %s
Wyrażam zgodę na przetwarzanie moich danych osobowych w celach:
obsługi zapytania: %s
działań marketingowych: %s
otrzymywania informacji handlowych: %s

---
Mail wygenerowany automatycznie na stronie %s',
				$formularz['opiekun_imię'],
				$formularz['opiekun_nazwisko'],
				$formularz['opiekun_tel'],
				$formularz['parent-email'],
				
				$formularz['typ'],
				$formularz['początek_kursu'],
				$formularz['koniec_kursu'],
				$formularz['preferowana_godzina'],
				$formularz['ilość_godzin'],
				count( $formularz['uczestnik_imię'] ),
				
				$lista,
				
				$formularz['wiadomość'],
				
				$formularz['zdrowie'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['regulamin'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['polityka'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['zapytanie'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['marketing'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['oferta'] === 'on'?( 'tak' ):( 'nie' ),
				
				home_url()
				
			);
			
			if( DMODE ){
				echo "<!--MAIL BODY\r\n";
				print_r( $mail->Body );
				echo "\r\n-->";
				$sended = true;
				// $sended = $mail->send();	
			}
			else{
				$sended = $mail->send();
			}
			
			sendConfirm( $formularz['parent-email'], $mail->Body );
			
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
					<input type='hidden' name='wydarzenie' value='<?php echo get_post()->post_title; ?>'>
					<?php get_template_part("template/rezerwuj-panel"); ?>
					<div class="details">
						<div class="row opiekun row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dane osobowe</div>
									<div class="person">Uczestnika</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="item flex flex-column base1 base2-mm">
										<label for="parent-name">Imię</label>
										<input type="text" id="parent-name" name="opiekun imię" required>
									</div>
									<div class="item flex flex-column base1 base2-mm">
										<label for="parent-surname">Nazwisko</label>
										<input type="text" if="parent-surname" name="opiekun nazwisko" required>
									</div>
									<div class="item flex flex-column base1 base2-mm">
										<label for="parent-tel">Tel. Kontaktowy</label>
										<input type="tel" id="parent-tel" name="opiekun tel" pattern="^\d[\d\- ]+\d$" title='Dozwolone znaki: cyfry, myślinki i spacje' required>
									</div>
									<div class="item flex flex-column base1 base2-mm">
										<label for="parent-email">Adres e-mail</label>
										<input type="email" name="parent-email" id="opiekun mail" pattern="^[^@]+@[^\.]+\..+$" title="[użytkownik]@[domena] np: jan@kowalski.pl" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row termin row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Termin i typ</div>
									<div class="person">kursu</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="item flex flex-column base1 base2-mm">
										<label for="">Typ kursu</label>
										<select name='typ' required>
											<option>Narty</option>
											<option>Snowboard</option>
										</select>
									</div>
									
								</div>
								<div class="flex flex-wrap">
									<div class="item flex flex-column base1 base2-mm">
										<label for="">Data rozpoczęcia kursu</label>
										<input type="date" id="" name="początek kursu" required>
									</div>
									<div class="item flex flex-column base1 base2-mm">
										<label for="">Data zakończenia kursu</label>
										<input type="date" id="" name="koniec kursu" required>
									</div>
									
								</div>
								<div class="flex flex-wrap">
									<div class="item flex flex-column base1 base2-mm">
										<label for="">Preferowana godzina</label>
										<input type='time' name='preferowana godzina' required>
									</div>
									<div class="item flex flex-column base1 base2-mm">
										<label for="">Ilość godzin (dziennie)</label>
										<select name='ilość godzin' required>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
									
								</div>
								
							</div>
						</div>
						<div class="row uczestnicy row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dane osobowe</div>
									<div class="person">uczestników</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class='person base1'>
										<div class='head base1'>
											Uczestnik
											<div class='del fa fa-times'></div>
										</div>
										<div class='body base1 flex flex-wrap'>
											<div class="item imie flex flex-column base1 base2-mm">
												<label for="">Imię</label>
												<input type="text" id="" name="uczestnik imię[]" required>
											</div>
											<div class="item nazwisko flex flex-column base1 base2-mm">
												<label for="">Nazwisko</label>
												<input type="text" id="" name="uczestnik nazwisko[]" required>
											</div>
											<div class="item wiek flex flex-column base1 base2-mm">
												<label for="">Wiek</label>
												<input type='number' min=1 step=1 name='uczestnik wiek[]' required>
											</div>
											<div class="check-row flex">
												<input type="checkbox" id="" class='promo' name="uczestnik wypożyczalnia[]">
												<label for="" class='promo'>Czy uczestnik kursu będzie korzystać z promocyjnego pakietu sprzętu z wypożyczalni FUN&amp;RACE?</label>
											</div>
											<div class='dimms flex flex-wrap optional'>
												<div class="item flex flex-column base1 base2-mm">
													<label for="">Długość stopy (cm)</label>
													<input type="number" id="" min=0 step=1 name="uczestnik stopa[]">
												</div>
												<div class="item flex flex-column base1 base2-mm">
													<label for="">Wzrost (cm)</label>
													<input type="number" id="" min=0 step=1 name="uczestnik wzrost[]">
												</div>
												<div class="item flex flex-column base1 base2-mm">
													<label for="">Waga (kg)</label>
													<input type="number" id="" min=0 step=1 name="uczestnik waga[]">
												</div>
											</div>
											
										</div>
									</div>
									<div class="buttons flex flex-wrap">
										<div class="add flex flex-justify-center flex-items-center">
											<p>Dodaj uczestnika</p>
											<i class="fa fa-plus" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<div class='cennik'>
									<div class='title'>
										Cennik:
									</div>
									<?php echo apply_filters( 'the_content', get_post_meta( get_post()->ID, 'cennik', true ) ); ?>
								</div>
							</div>
						</div>
						<div class="row wiadomo row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dodatkowe</div>
									<div class="person">informacje</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="check-row area flex flex-wrap">
										<label for="">Wiadomość</label>
										<textarea name='wiadomość' class='base1'></textarea>
									</div>
									
								</div>
							</div>
						</div>
						<div class="row dokumenty row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dokumenty</div>
									<div class="person"></div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="zgody flex flex-wrap">
									<div class="check-row check2 flex">
										<input type="checkbox" id="zdrowie" name="zdrowie" required="">
										<label for="zdrowie">
											Oświadczam, iż stan zdrowia zgłoszonego uczestnika/ów pozwala na udział w szkoleniu narciarskim/snowboardowym.
										</label>
									</div>
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
				</form>
			</div>
		</div>
	</div>
	<!--PARTNERS-->
	<?php get_template_part("template/partners-full"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>