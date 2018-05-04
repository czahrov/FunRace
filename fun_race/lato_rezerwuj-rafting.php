<?php
	get_header();
	/*
	Template Name: lato rezerwuj-rafting
	*/
	?>
<body id="rezerwuj-rafting" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu-lato"); ?>
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
				<form method='post' class="wrapper flex flex-column flex-row-dm flex-justify-between flex-items-start">
					<div class="levels">
						<div class="title flex flex-items-center">
							Poziom uczestnika
						</div>
						<div class="bar flex flex-items-center">Początkujący</div>
						<div class="descript">Sed nec massa in dolor aliquet bibendum</div>
						<div class="bar flex flex-items-center">Średnio-zaawansowany</div>
						<div class="descript">Nam hendrerit, sem id volutpat fringilla, arcu eros gravida ante, quis volutpat est est a leo. Phasellus rhoncus eget turpis id pretium. </div>
						<div class="bar flex flex-items-center">Zaawansowany</div>
						<div class="descript">Suspendisse rhoncus augue at lobortis scelerisque. Sed in neque volutpat, iaculis quam sed, rutrum tortor.</div>
					</div>
					<div class="details">
						<div class="row rezerwujacy row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Dane osobowe</div>
									<div class="person">rezerwującego</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<input type='hidden' name='Wydarzenie' value='<?php echo get_post()->post_title; ?>'>
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
						<div class="row dodatki row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Nasza</div>
									<div class="person">wypożyczalnia</div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class="check-row polityka check2 flex">
										<input type="checkbox" id="gopro" name="Dodatkowe opcje[]" value='kamera GoPro'>
										<label for="gopro">Wypożyczenie kamera GoPro</label>
									</div>
									<div class="check-row polityka check2 flex">
										<input type="checkbox" id="pianka" name="Dodatkowe opcje[]" value='pianka neoprenowa'>
										<label for="pianka">Wypożyczenie pianki neoprenowej ( dostępne rozmiary: M, L, XL )</label>
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
							<div class="personal personal-user">
								<div class="person flex flex-wrap">
									<div class="item imie flex flex-column base1 base2-mm">
										<label for="">Imię</label>
										<input type="text" id="" name="Imię uczestnika[]" required>
									</div>
									<div class="item nazwisko flex flex-column base1 base2-mm">
										<label for="">Nazwisko</label>
										<input type="text" id="" name="Nazwisko uczestnika[]" required>
									</div>
									
								</div>
								<div class="person flex flex-wrap">
									<div class="item imie flex flex-column base1 base2-mm">
										<label for="">Imię</label>
										<input type="text" id="" name="Imię uczestnika[]" required>
									</div>
									<div class="item nazwisko flex flex-column base1 base2-mm">
										<label for="">Nazwisko</label>
										<input type="text" id="" name="Nazwisko uczestnika[]" required>
									</div>
									
								</div>
								<div class="person flex flex-wrap">
									<div class="item imie flex flex-column base1 base2-mm">
										<label for="">Imię</label>
										<input type="text" id="" name="Imię uczestnika[]" required>
									</div>
									<div class="item nazwisko flex flex-column base1 base2-mm">
										<label for="">Nazwisko</label>
										<input type="text" id="" name="Nazwisko uczestnika[]" required>
									</div>
									
								</div>
								<div class="person flex flex-wrap">
									<div class="item imie flex flex-column base1 base2-mm">
										<label for="">Imię</label>
										<input type="text" id="" name="Imię uczestnika[]" required>
									</div>
									<div class="item nazwisko flex flex-column base1 base2-mm">
										<label for="">Nazwisko</label>
										<input type="text" id="" name="Nazwisko uczestnika[]" required>
									</div>
									
								</div>
								<div class="buttons flex flex-wrap flex-column flex-items-center">
									<div class="add flex flex-justify-center flex-items-center">
										<p>Dodaj uczestnika</p>
										<i class="fa fa-plus" aria-hidden="true"></i>
									</div>
									
								</div>
								
							</div>
							
						</div>
						<div class="row regulamin row1 flex flex-column flex-row-mm flex-justify-between">
							<div class="label flex flex-items-center">
								<div class="inner">
									<div class="title">Regulamin</div>
									<div class="person"></div>
								</div>
							</div>
							<div class="personal personal-parent">
								<div class="flex flex-wrap">
									<div class='zgody'>
										<div class="check-row regulamin check2 flex">
											<input type="checkbox" id="statute" name="Akceptuję regulamin" required>
											<label for="statute">Akceptuję regulamin</label>
											<a href="<?php echo home_url(); ?>">regulamin</a>
										</div>
										<div class="check-row polityka check2 flex">
											<input type="checkbox" id="privacy" name="Akceptuję politykę prywatności" required>
											<label for="privacy">Akceptuję politykę prywatności FunRace</label>
											<a href="#">polityka prywatności</a>
										</div>
										
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
				</form>
			</div>
		</div>
	</div>
	<!--PARTNERS-->
	<?php get_template_part("template/partners"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>