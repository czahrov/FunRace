<?php
	/*
		Template Name: zima rezerwuj-mamucik
	*/
	
	if( DMODE ){
		echo "<!--";
		print_r( $_POST );
		echo "-->";
	}
	
	if( !empty( $_POST ) ){
		$formularz = $_POST;
		
		if( !empty( $formularz['age'] ) ){
			$sended = false;
			$sended_msg = "Wiadomość zablokowana przez filtr antyspamowy!";
			
		}
		else{
			$mail = getMailer();
			
			$mail->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", "Formularz rezerwacji" );
			if( DMODE ){
				$mail->addAddress( 'sprytne@scepter.pl' );
			}
			elseif( DEVELOP ){
				$mail->addAddress( $formularz['Email_rezerwującego'] );
			}
			else{
				$mail->addAddress( "biuro@funrace.pl" );
			}
			
			$mail->Subject = "Rezerwacja kursu: {$formularz['wydarzenie']}";
			
			$lista = "";
			for( $i=0; $i<count( $formularz['uczestnik_imię'] ); $i++ ){
				if( empty( $formularz['uczestnik_imię'][$i] ) ) continue;
				
				$lista .= sprintf('
Uczestnik: %u
	Imię: %s
	Nazwisko: %s
	Data urodzenia (rrrr-mm-dd): %s
	Choroby i dolegliwości:
	%s
	
	Poziom umiejętności: %u
	Dodatkowy opis umiejętności:
	%s
	
	Uczestnik korzysta z wypożyczalni: %s
	%s

	
',
					$i + 1,
					$formularz['uczestnik_imię'][$i],
					$formularz['uczestnik_nazwisko'][$i],
					$formularz['uczestnik_urodziny'][$i],
					$formularz['uczestnik_zdrowie'][$i],
					$formularz['uczestnik_poziom'][$i],
					$formularz['uczestnik_opis'][$i],
					$formularz['uczestnik_wypożyczalnia'][$i] === 'on'?('tak'):('nie'),
					$formularz['uczestnik_wypożyczalnia'][$i] === 'on'?( sprintf(
	'Długość stopy: %u cm
	Wzrost: %u cm
	Waga: %u kg',
					$formularz['uczestnik_stopa'][$i],
					$formularz['uczestnik_wzrost'][$i],
					$formularz['uczestnik_waga'][$i]
						
					) ):('')
					
					
				);
				
			}
			
			$mail->Body = sprintf(
'Dane organizatora
---
Imię: %s
Nazwisko: %s
Numer telefonu: %s
Adres e-mail: %s

Informacje o kursie
---
Typ kursu: %s
Data odbycia kursu (rrrr-mm-dd): %s
Liczba uczestników: %u

Lista uczestników
---%s

Wiadomość
---
%s


Uczestnicy będą korzystać z wypożyczalni: %s
Akceptuję regulamin FunRace: %s
Akceptuję politykę prywatności FunRace: %s
Wyrażam zgodę na udział uczestników w kursie: %s
Wyrażam zgodę na przetwarzanie danych osobowych: %s

---
Mail wygenerowany automatycznie na stronie %s',
				$formularz['opiekun_imię'],
				$formularz['opiekun_nazwisko'],
				$formularz['opiekun_tel'],
				$formularz['parent-email'],
				
				$formularz['wydarzenie'],
				$formularz['data_kursu'],
				count( $formularz['uczestnik_imię'] ),
				
				$lista,
				
				$formularz['wiadomość'],
				
				$formularz['wypożyczalnia'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['regulamin'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['polityka'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['zgoda'] === 'on'?( 'tak' ):( 'nie' ),
				$formularz['Przetwarzanie_danych'] === 'on'?( 'tak' ):( 'nie' ),
				
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
									<div class="person">Rodzica / opiekuna</div>
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
									<div class="title">Termin</div>
									<div class="person">kursu</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="item flex flex-column base1 base2-mm">
										<label for="">Data</label>
										<input type="date" id="" name="data kursu" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row uczestnicy row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dane osobowe</div>
									<div class="person">uczestnika</div>
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
												<label for="">Data Urodzenia</label>
												<input type="date" id="" name="uczestnik urodziny[]" required>
											</div>
											<div class="item poziom flex flex-column base1 base2-mm">
												<label for="">Poziom dziecka</label>
												<select name='uczestnik poziom[]' required>
													<option>Poziom 0</option>
													<option>Poziom 1</option>
													<option>Poziom 2</option>
												</select>
											</div>
											<div class="area zdrowie flex flex-column">
												<label for="">Czy u dziecka występują alergie, przewlekłe choroby lub zażywa leki?</label>
												<textarea name="uczestnik zdrowie[]" id="" required></textarea>
											</div>
											<div class="area opis flex flex-column">
												<label for="">Dodatkowy opis posiadanych umiejętności</label>
												<textarea name="uczestnik opis[]" id=""></textarea>
											</div>
											<div class="check-row flex">
												<input type="checkbox" id="" class='promo' name="uczestnik wypożyczalnia[]">
												<label for="" class='promo'>Czy uczestnicy kursu będą korzystać z promocyjnego pakietu sprzętu narciarskiego z wypożyczalni FUN&amp;RACE?</label>
											</div>
											<div class='dimms flex optional'>
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
													<select name="uczestnik waga[]">
														<option>&lt;30</option>
														<option>30-34</option>
														<option>35-39</option>
														<option>40-44</option>
													</select>
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
										<input type="checkbox" id="statute" name="regulamin" required>
										<label for="statute">Akceptuję regulamin</label>
										<a href="#">regulamin</a>
									</div>
									<div class="check-row check2 flex">
										<input type="checkbox" id="privacy" name="polityka" required>
										<label for="privacy">Akceptuję politykę prywatności FunRace</label>
										<a href="<?php echo home_url('polityka-prywatnosci'); ?>">polityka prywatności</a>
									</div>
									<div class="check-row check2 flex">
										<input type="checkbox" id="statement" name="zgoda" required>
										<label for="statement">Oświadczam, iż stan zdrowia uczestnika/ów pozwala na udział w zajęciach Akademii Narciarskiej Mamucik</label>
									</div>
									<div class="check-row polityka check2 flex">
										<input type="checkbox" id="dane" name="Przetwarzanie danych" required>
										<label for="dane">
											Oświadczam, iż ukończyłam/em 16 rok życia i zgadzam się na przetwarzanie moich danych osobowych przez (dane administratora danych osobowych – tj. przedsiębiorcy prowadzącego sklep/stronę), w celu obsługi zapytania użytkownika. Podanie danych jest dobrowolne. Podstawą przetwarzania danych jest moja zgoda. Mam prawo wycofania zgody w dowolnym momencie. Dane osobowe będą przetwarzane do czasu obsługi zapytania. Mam prawo żądania od administratora dostępu do moich danych osobowych, ich sprostowania, usunięcia lub ograniczenia przetwarzania, a także prawo wniesienia skargi do organu nadzorczego. Strona stosuje profilowanie użytkowników m.in. za pośrednictwem plików cookies, w tym analitycznych, o czym więcej w Polityce Prywatności.
										</label>
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
					<div hidden>
						<input type='text' name='age' value=''>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--PARTNERS-->
	<?php get_template_part("template/partners-full"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>