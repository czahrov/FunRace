<?php
	get_header();
	
	/*
	Template Name: kontakt
	*/
	?>
<body id="kontakt" class="<?php do_action( 'body_hook' ); ?>">
	<header>
		<?php get_template_part("template/menu"); ?>
		<?php banner(); ?>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!-- AKTUALNOSCI -->
	<div class="kontakt">
		<div class="grid">
			<div class="container padding">
				<div class="content">
					<h2>Dane kontaktowe</h2>
					<div class="row flex flex-column flex-row-mm flex-justify-center flex-justify-start-ds flex-items-center flex-wrap">
						<div class="box">
							<div class="inner">
								<h3>FUNRACE Kamil Zaród</h3>
								<ul>
									<li>ul. Jana Pawła II 54</li>
									<li>34-460 Szczawnica</li>
								</ul>
							</div>
						</div>
						<div class="box">
							<div class="inner">
								<h3>ADRES SZKOŁY NARCIARSKIEJ<br>i WYPOŻYCZALNI FUNRACE</h3>
								<ul>
									<li>ul. Czarny Potok 77</li>
									<li>33-380 Krynica Zdrój</li>
								</ul>
							</div>
						</div>
						<div class="box">
							<div class="inner">
								<h3>KONTO BANKOWE:</h3>
								<ul>
									<li>FUNRACE Kamil Zaród</li>
									<li>Łącki Bank Spółdzielczy</li>
									<li>32 8805 0009 0048 0696 2000 0010</li>
								</ul>
							</div>
						</div>
						<div class="box">
							<div class="inner text-center">
								<div class="inner">
									<h3>NIP: 735-247-46-57<br>REGON: 12246583</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="row row2 flex flex-column flex-row-mm flex-justify-center flex-justify-start-ds flex-items-center flex-wrap">
						<div class="box">
							<div class="inner">
								<h3>Anna Buczek</h3>
								<ul>
									<li>e-mail: biuro@funrace.pl</li>
									<li>tel: +48 501 724 216</li>
								</ul>
							</div>
						</div>
						<div class="box">
							<div class="inner">
								<h3>Kamil Zaród</h3>
								<ul>
									<li>e-mail: biuro@funrace.pl</li>
									<li>tel: +48 609 375 913</li>
								</ul>
							</div>
						</div>
					</div>
					<h2>Formularz kontaktowy</h2>
					<form action="" class='fpcf'>
						<div class="form-row flex flex-column flex-row-mm flex-wrap">
							<div class="item base1 base2-mm base4-ds flex flex-column">
								<label for="name">Imię i nazwisko</label>
								<input type="text" id="name" name="person" value-type="person">
							</div>
							<div class="item base1 base2-mm base4-ds flex flex-column">
								<label for="email">Adres e-mail</label>
								<input class="" type="email" id="email" name="email" value="" value-type="email">
							</div>
							<div class="item base1 base2-mm base4-ds flex flex-column">
								<label for="phone">Numer telefonu</label>
								<input type="tel" id="phone" name="phone" value="" class="" value-type="phone">
							</div>
							<div class="item base1 base2-mm base4-ds flex flex-column">
								<label for="subject">Temat</label>
								<input type="text" id="subject" name="subject" value-type="subject">
							</div>
						</div>
						<div class="area flex flex-column">
							<label for="message">Treść wiadomości</label>
							<textarea name="message" id="message"  value-type="message"></textarea>
						</div>
						<div class="flex flex-justify-end">
							<a href="" class="submit flex flex-items-center">
								<div class="text">Wyślij wiadomość</div>
								<div class="arrow">
									<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_orange.png" alt="arrow">
								</div>
							</a>
						</div>
					</form>
					<h2>Lokalizacja Funrace</h2>
				</div>
			</div>
			<div class="container">
				<div id="map">
				</div>
			</div>
		</div>
	</div>
	<!--PARTNERS-->
	<?php get_template_part("template/partners-full"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>