<?php
	$season = $_SESSION['currentSeason'];
?>
<h2>Formularz kontaktowy</h2>
<form action="" class='fpcf'>
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
			<input type="tel" id="phone" name="phone" value="" class="" value-type="phone" pattern="^\d(\d+\s*)+\d$" title="Dozwolone znaki: cyfry, myślinki oraz spacje" required>
		</div>
		<div class="item base1 base2-mm base4-ds flex flex-column">
			<label for="subject">Temat</label>
			<input type="text" id="subject" name="subject" value-type="subject" reguired>
		</div>
	</div>
	<div class="area flex flex-column">
		<label for="message">Treść wiadomości</label>
		<textarea name="message" id="message"  value-type="message" required></textarea>
	</div>
	<div class='form-row'>
		<div class='item base1 flex flex-items-start'>
			<input id='zgoda' type='checkbox' name='zgoda' value-type='zgoda' required />
			<label for='zgoda'>
				Oświadczam, iż ukończyłam/em 16 rok życia i zgadzam się na przetwarzanie moich danych osobowych przez (dane administratora danych osobowych – tj. przedsiębiorcy prowadzącego sklep/stronę), w celu obsługi zapytania użytkownika. Podanie danych jest dobrowolne. Podstawą przetwarzania danych jest moja zgoda. Mam prawo wycofania zgody w dowolnym momencie. Dane osobowe będą przetwarzane do czasu obsługi zapytania. Mam prawo żądania od administratora dostępu do moich danych osobowych, ich sprostowania, usunięcia lub ograniczenia przetwarzania, a także prawo wniesienia skargi do organu nadzorczego. Strona stosuje profilowanie użytkowników m.in. za pośrednictwem plików cookies, w tym analitycznych, o czym więcej w Polityce Prywatności.
			</label>
		</div>
	</div>
	<div class="flex flex-justify-end">
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
	</div>
	<div class='notify'></div>
	<div hidden>
		<input type='text' name='age' />
	</div>
</form>
