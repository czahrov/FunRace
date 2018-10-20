<?php
		if( !empty( $_POST ) ){
		$formularz = $_POST;
		
		if( !empty( $formularz['age'] ) ){
			$sended = false;
			$sended_msg = "Wiadomość została zablokowana przez filtr antyspamowy";
		}
		else{
			if( DEVELOP or DMODE ){
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
			for( $i=0; $i<count( $formularz['sprzęt_rodzaj'] ); $i++ ){
				if( empty( $formularz['sprzęt_rodzaj'][$i] ) ) continue;
				
				$lista .= sprintf(
'Uczestnik: %u
	Rodzaj sprzętu: %s
	Płeć: %s
	Poziom umiejętności: %s
	Długość stopy: %s cm
	Wzrost: %s cm
	Waga: %s kg
	
',
					$i + 1,
					$formularz['sprzęt_rodzaj'][$i],
					$formularz['wypożyczający_płeć'][$i],
					$formularz['poziom_zaawansowania'][$i],
					
					$formularz['uczestnik_stopa'][$i],
					$formularz['uczestnik_wzrost'][$i],
					$formularz['uczestnik_waga'][$i]
					
				);
				
			}
			
			$mail->Body = sprintf(
'Dane wypożyczającego
---
Imię: %s
Nazwisko: %s
Numer telefonu: %s
Adres e-mail: %s

Wypożyczalnia
---
lokalizacja: %s
Liczba uczestników: %u

Lista uczestników:
---
%s

Wiadomość:
---
%s


Wyrażam zgodę na przetwarzanie moich danych osobowych w celach:
- obsługi zapytania: %s
- działań marketingowych: %s
- otrzymywania informacji handlowych: %s

---
Mail wygenerowany automatycznie na stronie %s',
				$formularz['wypożyczający_imię'],
				$formularz['wypożyczający_nazwisko'],
				$formularz['wypożyczający_tel'],
				$formularz['parent-email'],
				
				$formularz['lokalizacja'],
				count( $formularz['sprzęt_rodzaj'] ),
				
				$lista,
				
				$formularz['wiadomość'],
				
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
?>

<div class='rezerwuj-single'>
	<div class='grid'>
		<div class='container padding'>
			<form method='post' class="wrapper flex flex-column flex-row-dm flex-justify-between flex-items-start">
				<input type='hidden' name='wydarzenie' value='<?php echo get_post()->post_title; ?>'>
				<?php get_template_part("template/rezerwuj-panel"); ?>
				<div class="details">
					<div class="row wypożyczający row1 flex flex-column flex-row-mm flex-justify-between">
						<div class="label flex flex-items-center">
							<div class="inner">
								<div class="title">Dane osobowe</div>
								<div class="person">Wypożyczającego</div>
							</div>
						</div>
						<div class="personal personal-parent">
							<div class="flex flex-wrap">
								<div class="item flex flex-column base1 base2-mm">
									<label for="parent-name">Imię</label>
									<input type="text" id="parent-name" name="wypożyczający imię" required>
								</div>
								<div class="item flex flex-column base1 base2-mm">
									<label for="parent-surname">Nazwisko</label>
									<input type="text" if="parent-surname" name="wypożyczający nazwisko" required>
								</div>
								<div class="item flex flex-column base1 base2-mm">
									<label for="parent-tel">Tel. Kontaktowy</label>
									<input type="tel" id="parent-tel" name="wypożyczający tel" pattern="^\d[\d\- ]+\d$" title='Dozwolone znaki: cyfry, myślinki i spacje' required>
								</div>
								<div class="item flex flex-column base1 base2-mm">
									<label for="parent-email">Adres e-mail</label>
									<input type="email" name="parent-email" id="wypożyczający mail" pattern="^[^@]+@[^\.]+\..+$" title="[użytkownik]@[domena] np: jan@kowalski.pl" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row uczestnicy row1 flex flex-column flex-row-mm flex-justify-between">
						<div class="label flex flex-items-center">
							<div class="inner">
								<div class="title">Rodzaj</div>
								<div class="person">sprzętu</div>
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
											<label for="">Rodzaj sprzętu</label>
											<select id='' name='sprzęt rodzaj[]' required>
												<option disabled selected>---</option>
												<option>Narty</option>
												<option>Snowboard</option>
											</select>
										</div>
										<div class="item nazwisko flex flex-column base1 base2-mm">
											<label for="">Płeć</label>
											<select id='' name='wypożyczający płeć[]'>
												<option disabled selected>---</option>
												<option>Mężczyzna</option>
												<option>Kobieta</option>
												<option>Dziecko</option>
											</select>
										</div>
										<div class="item poziom flex flex-column base1 base2-mm">
											<label for="">Poziom zaawansowania</label>
											<select name='poziom zaawansowania[]' required>
												<option disabled selected>---</option>
												<option>Początkowy</option>
												<option>Średnio-zaawansowany</option>
												<option>Zaawansowany</option>
											</select>
										</div>
										<div class="item flex flex-column base1 base2-mm">
											<label for="">Długość stopy (cm)</label>
											<input type="number" id="" name="uczestnik stopa[]" required>
										</div>
										<div class="item flex flex-column base1 base2-mm">
											<label for="">Wzrost (cm)</label>
											<input type="number" id="" name="uczestnik wzrost[]" required>
										</div>
										<div class="item flex flex-column base1 base2-mm">
											<label for="">Waga (kg)</label>
											<input type="number" id="" name="uczestnik waga[]" step=1 min=0 required>
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
								<div class="title">Wybierz</div>
								<div class="person">wypożyczalnię</div>
							</div>
						</div>
						<div class="personal personal-parent">
							<div class="flex flex-wrap">
								<div class="item flex flex-column base1 base2-mm">
									<label for="">Lokalizacja</label>
									<select name='lokalizacja'>
										<option disabled selected>---</option>
										<option>Jaworzyna Krynicka (Pasaż u leśników)</option>
										<option>Dwie doliny - Wierchomla (przy górnym parkingu)</option>
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
								<div class="check-row polityka check2 flex">
									<input type="checkbox" id="zapytanie" name="zapytanie" required>
									<label for="zapytanie">
										Oświadczam, iż ukończyłam/em 16 rok życia i zgadzam się na przetwarzanie moich danych osobowych przez FUNANDRACE Kamil Zaród, z siedziba w Szczawnicy, ul. Jana Pawła II 54, w celu obsługi zapytania użytkownika. Podanie danych jest dobrowolne. Podstawą przetwarzania danych jest moja zgoda. Mam prawo wycofania zgody w dowolnym momencie. Dane osobowe będą przetwarzane do czasu obsługi zapytania. Mam prawo żądania od administratora dostępu do moich danych osobowych, ich sprostowania, usunięcia lub ograniczenia przetwarzania, a także prawo wniesienia skargi do organu nadzorczego. Strona stosuje profilowanie użytkowników m.in. za pośrednictwem plików cookies, w tym analitycznych, o czym więcej w Polityce Prywatności.
									</label>
								</div>
								<div class="check-row polityka check2 flex">
									<input type="checkbox" id="marketing" name="marketing">
									<label for="marketing">
										Wyrażam zgodę na przetwarzanie przez FUNANDRACE z siedzibą w Szczawnicy, ul. Jana Pawła II 54 moich danych osobowych w zakresie: imię, nazwisko, dane teleadresowe, adres e-mail, w celach marketingowych w tym marketingu bezpośredniego usług własnych. Oświadczam, że moja zgoda jest dobrowolna i może być w każdej chwili wycofana.
									</label>
								</div>
								<div class="check-row polityka check2 flex">
									<input type="checkbox" id="oferta" name="oferta">
									<label for="oferta">
										Wyrażam zgodę na otrzymywanie od FUNANDRACE z siedzibą w Szczawnicy, ul. Jana Pawła II 54 drogą elektroniczną na wskazany przeze mnie we wniosku adres e-mail, informacji handlowych, dotyczących produktów i usług oferowanych przez FUNRACE w rozumieniu ustawy o świadczeniu usług drogą elektroniczną z dnia 18 lipca 2002 r. (Dz. U z 2013 r., poz. 1422 ze zm.) Oświadczam, że moja zgoda jest dobrowolna i może być w każdej chwili wycofana.
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
					<input type='text' name='age'/>
				</div>
			</form>
			
		</div>
		
	</div>
	
</div>

