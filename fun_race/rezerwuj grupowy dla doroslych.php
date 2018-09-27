<?php
	/* Template Name: zima rezerwuj grupowe dla dorosłych */
	
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
			}
			
			$mail->Subject = "Rezerwacja kursu: {$formularz['wydarzenie']}";
			
			$lista = "";
			for( $i=0; $i<count( $formularz['uczestnik_imię'] ); $i++ ){
				if( empty( $formularz['uczestnik_imię'][$i] ) ) continue;
				
				$lista .= sprintf(
'Uczestnik: %u
	Imię: %s
	Nazwisko: %s
	Wiek: %s
	Poziom umiejętności: %s
	Dodatkowe umiejętności/uwagi: %s
	Dolegliwości zdrowotne: %s
	Uczestnik korzysta z wypożyczalni: %s
	%s
	
',
					$i + 1,
					$formularz['uczestnik_imię'][$i],
					$formularz['uczestnik_nazwisko'][$i],
					$formularz['uczestnik_wiek'][$i],
					$formularz['poziom_umiejętności'][$i],
					$formularz['umiejętności'][$i],
					$formularz['alergie'][$i],
					
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
Data kursu: %s
Liczba uczestników: %u

Lista uczestników
---
%s

Wiadomość:
---
%s


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
				
				$formularz['data_kursu'],
				count( $formularz['uczestnik_imię'] ),
				
				$lista,
				
				$formularz['wiadomość'],
				
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
				// $sended = true;
				$sended = $mail->send();
				
			}
			else{
				$sended = $mail->send();
				
			}
			
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
											<div class="item urodziny flex flex-column base1 base2-mm">
												<label for="">Wiek</label>
												<input type='number' min=18 step=1 name='uczestnik wiek[]' required>
											</div>
											<div class="item poziom flex flex-column base1 base2-mm">
												<label for="">Poziom umiejętności</label>
												<select name='poziom umiejętności[]' required>
													<option title='Rozpoczyna dopiero naukę jazdy na nartach.'>Poziom 0</option>
													<option title='Potrafi skręcać pługiem, hamować na żądanie. Kontroluje prędkość. Zjeżdża z tras niebieskich/czerwonych. Samodzielnie korzysta z wyciągów. Min. dwa sezony na nartach.'>Poziom 1</option>
													<option title='Ustawia narty do układu równoległego. Potrafi skręcać, hamować na żądanie i przed przeszkodą, kontroluje prędkość. Zjeżdża z tras czerwonych/czarnych. Samodzielnie korzysta z wyciągów. Co najmniej 3 sezony na nartach.'>Poziom 2</option>
												</select>
											</div>
											<div class="item opis flex flex-column base1">
												<label for="">Dodatkowy opis umiejętności/uwagi</label>
												<textarea name='umiejętności[]'></textarea>
											</div>
											<div class="item alergie flex flex-column base1">
												<label for="">Czy uczestnik jest na coś uczulony, zażywa leki bądź przewlekle na coś choruje?</label>
												<textarea name='alergie[]'></textarea>
											</div>
											<div class="check-row flex">
												<input type="checkbox" id="" class='promo' name="uczestnik wypożyczalnia[]">
												<label for="" class='promo'>Czy uczestnik kursu będzie korzystać z promocyjnego pakietu sprzętu z wypożyczalni FUN&amp;RACE?</label>
											</div>
											<div class='dimms flex flex-wrap optional'>
												<div class="item flex flex-column base1 base2-mm">
													<label for="">Długość stopy (cm)</label>
													<input type="number" id="" name="uczestnik stopa[]">
												</div>
												<div class="item flex flex-column base1 base2-mm">
													<label for="">Wzrost (cm)</label>
													<input type="number" id="" name="uczestnik wzrost[]">
												</div>
												<div class="item flex flex-column base1 base2-mm">
													<label for="">Waga (kg)</label>
													<input type="number" id="" name="uczestnik waga[]" step=1 min=0>
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
								
							</div>
						</div>
						<div class="row termin row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Termin</div>
									<div class="person">kursu</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="item flex flex-column base1 base2-mm">
										<label for="">Termin kursu</label>
										<select name='data kursu' required>
											<?php
												$terminy = get_post_meta( get_post()->ID, 'terminy', true );
												$terminy_a = explode( "\r\n", $terminy );
												if( !empty( $terminy_a ) ) foreach( $terminy_a as $single ){
													echo "<option>{$single}</option>";
												}
											?>
										</select>
									</div>
									
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
									<div class='check-row check2'>
										Oświadczam, iż stan zdrowia uczestnika/ów pozwala na udział w kursie narciarskim dla dorosłych.
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