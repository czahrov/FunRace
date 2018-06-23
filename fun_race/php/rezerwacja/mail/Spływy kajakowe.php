<?php
$mail->Subject = "Rezerwacja spływu kajakiem";
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

Wybrany sprzęt
---
Pakiet spływu: %s
Rodzaj kajaka: %s

Wiadomość
---
%s


Akceptuję regulamin FunRace: %s
Akceptuję politykę prywatności FunRace: %s
Wyrażam zgodę na przetwarzanie danych osobowych: %s

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
	
	$formularz['pakiet_spływu'],
	$formularz['kajak'],
	
	$formularz['wiadomosc'],
	
	$formularz['Akceptuję_regulamin'] === 'on'?( 'tak' ):( 'nie' ),
	$formularz['Akceptuję_politykę_prywatności'] === 'on'?( 'tak' ):( 'nie' ),
	$formularz['Przetwarzanie_danych'] === 'on'?( 'tak' ):( 'nie' ),
	
	home_url()
	
);

