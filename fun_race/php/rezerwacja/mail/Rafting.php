<?php

$mail->Subject = "Rezerwacja raftingu";
$mail->Body = sprintf(
'Dane uczestnika
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
Wyrażam zgodę na przetwarzanie moich danych osobowych w celach:
obsługi zapytania: %s
działań marketingowych: %s
otrzymywania informacji handlowych: %s

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
	
	$formularz['regulamin'] === 'on'?( 'tak' ):( 'nie' ),
	$formularz['polityka'] === 'on'?( 'tak' ):( 'nie' ),
	$formularz['zapytanie'] === 'on'?( 'tak' ):( 'nie' ),
	$formularz['marketing'] === 'on'?( 'tak' ):( 'nie' ),
	$formularz['oferta'] === 'on'?( 'tak' ):( 'nie' ),
	
	home_url()
	
);

