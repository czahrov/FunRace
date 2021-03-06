<?php
class Newsletter{
	private $_connect = null;
	
	// inicjacja połączenia z bazą danych
	public function __construct(){
		$this->_connect = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
		
		if( mysqli_connect_errno() ){
			$this->_connect = false;
			
		}
		
	}
	
	// zakańczanie połączenia z bazą danych
	public function __destruct(){
		if( $this->_connect !== null ){
			mysqli_close( $this->_connect );
			
		}
		
	}
	
	// wykonuje zapytanie SQL, zwraca tablicę asocjacyjną albo false
	private function _SQL( $sql = "" ){
		$query = mysqli_query( $this->_connect, $sql );
		if( $query === true or $query === false ){
			return $query;
			
		}
		else{
			$fetch = mysqli_fetch_all( $query, MYSQLI_ASSOC );
			mysqli_free_result( $query );
			return $fetch;
			
		}
		
	}
	
	// rejestruje nowy email w bazie danych
	public function register( $email = "" ){
		// sprawdza czy dany email istnieje już w bazie
		$sql = "SELECT COUNT( ID ) as 'count' FROM newsletter WHERE mail = '{$email}'";
		$result = $this->_SQL( $sql );
		if( $result[0]['count'] == 0 ){
			// email nie istnieje, dodawanie nowego
			$id = sha1( time() );
			$sql = "INSERT INTO newsletter ( ID, mail ) VALUES ( '{$id}', '{$email}' )";
			return $this->_SQL( $sql );
			
		}
		else{
			// email istnieje
			return false;
			
		}
		
	}
	
	// wyrejestrowywuje ( usuwa ) email z bazy danych
	public function unregister( $id = "" ){
		$sql = "DELETE FROM newsletter WHERE ID = '{$id}'";
		return $this->_SQL( $sql );
		
	}
	
	// aktywacja adresu email
	public function activate( $id = null, $season = '' ){
		// sprawdza czy dany email istnieje w bazie
		$sql = "SELECT * FROM newsletter WHERE ID = '{$id}'";
		$result = $this->_SQL( $sql );
		if( count( $result ) > 0 ){
			// email istnieje w bazie
			$sql = "UPDATE newsletter SET status = 1 WHERE ID = '{$id}'";
			
			if( $this->_SQL( $sql ) ){
				$mailer = getMailer();
				$mailer->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", get_bloginfo( 'name' ) );
				$mailer->addAddress( $result[0]['mail'] );
				$mailer->Subject = "Potwierdzenie aktywacji usługi Newsletter - " . get_bloginfo( 'name' );
				$mailer->Body = sprintf(
					'Aktywacja usługi Newsletter przebiegła pomyślnie!
Dziękujemy za korzystanie z naszych usług.

Pamiętaj, że w każdej chwili możesz zrezygnować z usługi klikając poniższy link:
%s
---
Mail wygenerowany automatycznie na stronie: %s',
					home_url() . "/{$season}/?unreg={$id}#newsletter",
					home_url()
					
				);
				
				if( $mailer->send() ){
					return true;
					
				}
				else{
					return false;
					
				}
				
				
			}
			else{
				return false;
				
			}
			
		}
		else{
			// brak emailu w bazie
			return false;
			
		}
		
	}
	
	// wysyła aktywacyjny link dla danego maila
	public function sendLink( $mail = '', $season = '' ){
		$sql = "SELECT * FROM newsletter WHERE mail = '{$mail}'";
		$result = $this->_SQL( $sql );
		
		if( !empty( $result ) ){
			$mailer = getMailer();
			$mailer->setFrom( "noreply@{$_SERVER['HTTP_HOST']}", get_bloginfo( 'name' ) );
			$mailer->addAddress( $result[0]['mail'] );
			$mailer->Subject = "Aktywacja usługi Newsletter - " . get_bloginfo( 'name' );
			$mailer->Body = sprintf(
				'Witaj !
Otrzymujesz tego maila powienieważ ktoś, mamy nadzieję że Ty, dodał ten adres e-mail do naszej usługi Newsletter.
Dzięki tej usłudze będziesz na bierząco otrzymywać informacje o nowościach i promocjach w naszej ofercie.
Aby aktytować usługę proszę kliknąć w link aktywacyjny, lub zignorować tę wiadomość.

Link aktywacyjny: %s

Administratorem Państwa danych osobowych zbieranych za pośrednictwem strony %s jest %s.
Miejsce wykonywania działalności oraz adres do doręczeń: %s. , NIP: %s, REGON: %s, adres poczty elektronicznej (e-mail): %s.
Państwa dane osobowe będą przetwarzane na podstawie art. 6 ust. 1 lit. a) rozporządzenia ogólnego w sprawie ochrony danych osobowych (RODO). Dane mogą być przetwarzane w celu przesyłania informacji handlowych drogą elektroniczną w celu marketingu bezpośredniego – odpowiednio w związku z art. 10 ust. 2 Ustawy z dnia 18 lipca 2002 roku o świadczeniu usług drogą elektroniczną lub art. 172 ust. 1 Ustawy z dnia 16 lipca 2004 roku – Prawo Telekomunikacyjne, w tym kierowanych w wyniku profilowania, o ile użytkownik wyraził stosowną zgodę.
Dane mogą być udostępnione wyłącznie podmiotom, które obsługują Administratora lub jego podwykonawcom. Dane będą przetwarzane przez czas ważności zgody lub do czasu ustania celu dla jakiego zostały zebrane. Przysługuje Panu/i prawo żądania dostępu do Pana/i danych osobowych, ich sprostowania, usunięcia, lub ograniczenia przetwarzania, prawo do przeniesienia danych oraz prawo do wniesienia skargi do organu nadzorczego. Więcej informacji na temat przetwarzania danych osobowych znajdą Państwo w Polityce Prywatności dostępnej pod adresem %s.

---
Mail wygenerowany automatycznie na stronie: %s',
				home_url( "/{$season}/?validate={$result[0]['ID']}#newsletter" ),
				
				home_url(),
				'Kamil Zaród',
				'FUNANDRACE Kamil Zaród, ul. Jana Pawła II 54, 34-460 Szczawnica',
				'35-247-46-57',
				'12246583',
				'biuro@funrace.pl',
				home_url('polityka-prywatnosci'),
				
				home_url()
				
			);
			
			if( $mailer->send() ){
				return true;
				
			}
			else{
				return false;
				
			}
			
		}
		else return false;
		
	}
	
	// zwraca listę aktywnych adresów email
	public function printList(){
		$sql = "SELECT mail FROM newsletter WHERE status = 1";
		$result = $this->_SQL( $sql );
		
		$ret = array();
		foreach( $result as $item ){
			$ret[] = $item['mail'];
			
		}
		
		return $ret;
		
	}
	
}
