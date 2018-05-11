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
	<div class="flex flex-justify-end">
		<a class="submit flex flex-items-center">
			<div class="text">Wyślij wiadomość</div>
			<div class="arrow">
				<img src="<?php
					printf(
						'%s/img/arrow_%s.png',
						get_template_directory_uri(),
						getSeason() === 'lato'?( 'blue' ):( 'orange' )
						
					);
				?>" alt="arrow">
			</div>
		</a>
	</div>
	<div class='notify'></div>
</form>
