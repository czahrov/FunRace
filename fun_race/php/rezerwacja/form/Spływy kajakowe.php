<?php

echo <<<EOT
<div class="row rezerwujacy row1 flex flex-column flex-row-mm flex-justify-between">
	<div class="label flex flex-items-center">
		<div class="inner">
			<div class="title">Dane osobowe</div>
			<div class="person">rezerwującego</div>
		</div>
	</div>
	<div class="personal personal-parent">
		<div class="flex flex-wrap">
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
<div class="row data row1 flex flex-column flex-row-mm flex-justify-between">
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
					<option>Sromowce Niżne - Szczawnica (wycieczka z Zakopanego)</option>
					<option>Niedzica - Szczawnica</option>
					<option value='Sromowce Niżne - Krościenko n/Dunajcem'>Sromowce Niżne - Krościenko n/Dunajcem (trasa dostępna wyłącznie o 13:30)</option>
					
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
			<div class="title">Skompletuj swój</div>
			<div class="person">sprzęt</div>
		</div>
	</div>
	<div class="personal personal-parent">
		<div class="flex flex-wrap">
			<div class="item pakiet flex flex-column base1 base2-mm">
				<label for="">Pakiet spływu</label>
				<select name='pakiet spływu' required>
					<option>kajak 1 osobowy</option>
					<option>kajak 1 osobowy + przejazd busem</option>
					<option>kajak 2 osobowy</option>
					<option>kajak 2 osobowy + przejazd busem</option>
					<option>kajak 2 osobowy + przejazd rowerem</option>
					<option>pakiet rodzinny</option>
					
				</select>
			</div>
			<div class="item kajak flex flex-column base1 base2-mm">
				<label for="">Rodzaj kajaka</label>
				<select name='kajak' required>
					<option>Pneumatyczny (pompowany)</option>
					<option>Polietylenowy (plastikowy)</option>
					
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

EOT;
