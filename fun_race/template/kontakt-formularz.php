<?php
	if( !empty( $_POST ) ){
		if( DMODE ){
			echo "<!--POST_FORM\r\n";
			print_r( $_POST );
			echo "-->";
		}
		
		/* honeypot */
		if( !empty( $_POST['age'] ) ){
			$status = 'fail';
			$msg = 'Wiadomość została zablokowana przez filtr antyspamowy!';
			
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
			
			switch( $_POST['zgoda_na'] ){
				case 'odpowiedź':
					$zgoda_na = 'odpowiedzi na tą wiadomość';
				break;
				case 'marketing':
					$zgoda_na = 'przeprowadzania działań marketingowych';
				break;
				case 'oferta':
					$zgoda_na = 'otrzymywania informacji handlowych';
				break;
				
			}
			
			$mail->Body = sprintf(
				'Wiadomość od: %s
Telefon: %s
Email: %s
Temat: %s
Treść wiadomości:
%s

Wyrażam zgodę na przetwarzanie moich danych osobowych w celu: %s

---
Mail wygenerowany automatycznie na %s',
				$safe['person'],
				$safe['phone'],
				$safe['email'],
				$safe['subject'],
				$safe['message'],
				$zgoda_na,
				home_url()
				
			);

			if( DMODE ){
				// echo "<!--MAIL_BODY:\r\n{$mail->Body}\r\n-->";
				$sended = $mail->send();
				// $sended = true;
				
			}
			else{
				$sended = $mail->send();
				
			}

			if( $sended ){
				$status = 'success';
				$msg = 'Mail wysłany pomyślnie';
				
			}
			else{
				$status = 'success';
				$msg = 'Mail wysłany pomyślnie';
				
			}
			
		}
		
	}
	
	$season = $_SESSION['currentSeason'];
?>
<h2>Formularz kontaktowy</h2>
<form method='post' class='fpcf'>
	<div class='notify <?php echo $status; ?>'><?php echo $msg; ?></div>
	<div class="form-row flex flex-column flex-row-mm flex-wrap">
		<div class="item base1 base2-mm base4-ds flex flex-column">
			<label for="name">Imię i nazwisko</label>
			<input type="text" id="name" name="person" value-type="person" required>
		</div>
		<div class="item base1 base2-mm base4-ds flex flex-column">
			<label for="email">Adres e-mail</label>
			<input class="" type="email" id="email" name="email" value="" value-type="email" pattern="^[^@]+@[^\.]+\..+$" title="[login]@[domena] np: jan@kowalski.pl" required>
		</div>
		<div class="item base1 base2-mm base4-ds flex flex-column">
			<label for="phone">Numer telefonu</label>
			<input type="tel" id="phone" name="phone" value="" class="" value-type="phone" pattern="^\d([\d\- ])+\d$" title="Dozwolone znaki: cyfry, myślinki oraz spacje" required>
		</div>
		<div class="item base1 base2-mm base4-ds flex flex-column">
			<label for="subject">Temat</label>
			<input type="text" id="subject" name="subject" value-type="subject" required>
		</div>
	</div>
	<div class="area flex flex-column">
		<label for="message">Treść wiadomości</label>
		<textarea name="message" id="message"  value-type="message" required></textarea>
	</div>
	<div class='form-row'>
		<div class='item base1 flex flex-items-start'>
			<input id='zgoda' class='zgoda' type='checkbox' name='zgoda' value-type='zgoda' required />
			<label for='zgoda'>
				Niniejszym oświadczam, że zapoznałem/łam się z Polityką Ochrony Danych Osobowych obowiązującą w FUNANDRACERACE Kamil Zaród z siedzibą w Szczawnicy ul. Jana Pawła II i uzyskałem wiedzę, o tym kto jest administratorem moich danych osobowych, w jakim celu i na jakiej podstawie są przetwarzane moje dane osobowe, przez jaki okres moje dane będą przechowywane, kim są odbiorcy moich danych osobowych, a także jakie prawa mi przysługują w związku z przetwarzaniem danych osobowych. Posiadam również wiedzę o dobrowolności podania danych, a także o zautomatyzowanym podejmowaniu decyzji odnośnie moich danych osobowych.
			</label>
		</div>
		<div class='item base1 flex flex-items-start'>
			Prosimy o zaznaczenie jednego z poniższych pól, w zakresie wyrażenia przez Pana/Panią zgody na posługiwanie się przez FUNRACE Kamil Zaród Pani/Pana danymi osobowymi.
		</div>
		<div class='item base1 flex flex-items-start'>
			<input id='zgoda_formularz' class='zgoda' type='radio' name='zgoda_na' value='odpowiedź' value-type='zgoda' required/>
			<label for='zgoda_formularz'>
				<b>Wyrażam zgodę na przetwarzanie</b> przez FUNANDRACE z siedzibą w Szczawnicy, ul. Jana Pawła II 54 <b>moich danych osobowych</b> w zakresie: imię, nazwisko, dane teleadresowe, adres e-mail, wskazanych w niniejszym formularzu, <b>w celu wysłania odpowiedzi na zadane przeze mnie pytanie.</b> Oświadczam, że moja zgoda jest dobrowolna i może być w każdej chwili wycofana.
			</label>
		</div>
		<div class='item base1 flex flex-items-start'>
			<input id='zgoda_marketing' class='zgoda' type='radio' name='zgoda_na' value='marketing' value-type='zgoda'  required/>
			<label for='zgoda_marketing'>
				<b>Wyrażam zgodę na przetwarzanie</b> przez FUNANDRACE z siedzibą w Szczawnicy, ul. Jana Pawła II 54 <b>moich danych osobowych</b> w zakresie: imię, nazwisko, dane teleadresowe, adres e-mail, <b>w celach marketingowych w tym marketingu bezpośredniego usług własnych.</b> Oświadczam, że moja zgoda jest dobrowolna i może być w każdej chwili wycofana.
			</label>
		</div>
		<div class='item base1 flex flex-items-start'>
			<input id='zgoda_oferta' class='zgoda' type='radio' name='zgoda_na' value='oferta' value-type='zgoda'  required/>
			<label for='zgoda_oferta'>
				<b>Wyrażam zgodę na otrzymywanie</b> od FUNANDRACE z siedzibą w Szczawnicy, ul. Jana Pawła II 54 <b>drogą elektroniczną na wskazany przeze mnie we wniosku adres e-mail, informacji handlowych, dotyczących produktów i usług</b> oferowanych przez FUNRACE w rozumieniu ustawy o świadczeniu usług drogą elektroniczną z dnia 18 lipca 2002 r. (Dz. U z 2013 r., poz. 1422 ze zm.) Oświadczam, że moja zgoda jest dobrowolna i może być w każdej chwili wycofana.
			</label>
		</div>
		<div class='item base1 flex flex-items-start'>
			Wyrażenie powyższej zgody jest dobrowolne, natomiast brak wyrażenia zgody powoduje, że nie będziemy mogli świadczyć dla Pani/ Pana usług.
		</div>
		<div class='item base1 flex flex-items-start'>
			W każdej chwili przysługuje Pani/Panu prawo do wycofania zgody na posługiwanie się przez nas Pani/Pana danymi osobowymi. Cofnięcie zgody nie będzie wpływać na zgodność z prawem przetwarzania, którego dokonano na podstawie Pani/Pana zgody przed jej wycofaniem.
		</div>
		
	</div>
	<div class="flex flex-justify-end">
		<button type='submit'>
			<a class="submit flex flex-items-center">
				<div class="text">Wyślij wiadomość</div>
				<div class="arrow">
					<img src="<?php
						printf(
							'%s/img/arrow_%s.png',
							get_template_directory_uri(),
							$season === 'lato'?( 'blue' ):( 'orange' )
							
						);
					?>" alt="arrow">
				</div>
			</a>
		</button>
	</div>
	<div hidden>
		<input type='text' name='age' />
	</div>
</form>