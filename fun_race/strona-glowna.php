<?php
	get_header();

	/*
	Template Name: zima
	*/
?>

<body>
 <header>
    <?php get_template_part("template/menu"); ?>
		
	<div class="poster flex flex-items-center" id="slider-main">

          
           <div class="slide flex flex-column flex-justify-center show">
                <div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/baner_1_lato_funrace.jpg);"></div>
                <div class="content">
                    <h2>Wyjazdy narciarskie do <span class="block">Włoch i Austrii</span></h2>
                    <a href="wyjazdy-alpy.html" class="flex flex-items-center flex-justify-center">sprawdź szczegóły</a>
                </div>
	        </div>
	          <div class="slide flex flex-column flex-justify-center">
                <div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/szkolenia_sportowe.jpg);"></div>
                <div class="content">
                    <h2>Szkolenia sportowe <span class="block">Race</span></h2>
                    <a href="szkolenia-ind-grup.html" class="flex flex-items-center flex-justify-center">sprawdź szczegóły</a>
                </div>
	        </div>
           
            <div class="slide flex flex-column flex-justify-center">
                <div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/sitn_pzn2.jpg);"></div>
                <div class="content">
                    <h2>Kursy instruktorskie <span class="block">SITN PZN</span></h2>
                    <a href="kursy-instruktorskie.html" class="flex flex-items-center flex-justify-center">sprawdź szczegóły</a>
                </div>
	        </div>

		
		<div class="labels flex flex-items-end">
			<div class="label base3 flex flex-items-center active">
				<p>Wyjazdy narciarskie do<span class="block">Włoch i Austrii</span></p>
				<div class="sticker" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/baner_1_lato_funrace.jpg)"></div>
			</div>
			<div class="label base3 flex flex-items-center">
				<p>Szkolenia sportowe<span class="block">Race</span></p>
				<div class="sticker" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/szkolenia_sportowe.jpg)"></div>
			</div>
			<div class="label base3 flex flex-items-center">
				<p>Kursy instruktorskie<span class="block">Sitn pzn</span></p>
				<div class="sticker" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/sitn_pzn2.jpg)"></div>
			</div>
		</div>
       
        <div class="box prev flex flex-items-center flex-justify-center"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></div>
        <div class="box next right flex flex-items-center flex-justify-center"><span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></div>
		
	</div>
 </header>
 
 
    <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>

	<div class="intro grid">
	
		<div class="container flex flex-column flex-row-ds flex-items-start">
		
			<div class="col base1">
				<div class="inner flex flex-wrap">
					<div class="content base1">
						<h2>Witaj w świecie <span class="block">Funrace</span></h2>
						<p>
						Przygotowaliśmy kompleksową ofertę, która sprawi,<br>
						że Twój zimwy wypoczynek będzie niezapomnianym przeżyciem.
						Zapoznaj się z naszymi propozycjami
						</p>
					</div>
					<div class="box base1">
						<a href="<?php echo home_url('zima/oferta/szkolenia-narciarskie'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/szkolenia_.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Szkolenia indywidualne i grupowe</h3>
								<p>Dla dorosłych i dzieci</p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long">
						<a href="<?php echo home_url('zima/oferta/zawody-narciarskie'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/zawody.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Organizacja zawodów</h3>
								<p>narciarskich, snowboardowych</p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long long-two">
						<a href="<?php echo home_url('zima/oferta/wyjazdy-alpy'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_narciarskie.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Wyjazdy narciarskie</h3>
								<p>za granicę</p>
							</div>
						</a>
					</div>
					<div class="box base1">
						<a href="<?php echo home_url('zima/oferta/szkolenia-race'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/szkolenia_sportowe.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Szkolenia sportowe</h3>
								<p>Race</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col col2 base1">
				<div class="inner flex flex-wrap">
					<div class="box base1 base2-mm long">
						<a href="<?php echo home_url('zima/oferta/mamucik'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/akademia_mamucik.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Akademia Mamucik</h3>
								<p>dla dzieci</p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long long-two">
						<a href="<?php echo home_url('zima/oferta/kursy-instruktorskie'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/sitn_pzn.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Kursy instruktorskie</h3>
								<p>SITN PZN</p>
							</div>
						</a>
					</div>
					<div class="box base1">
						<a href="<?php echo home_url('zima/oferta/telemark'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/telemark.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Telemark</h3>
								
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long">
						<a href="<?php echo home_url('zima/oferta/imprez-integracyjne'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Wyjazdy integracyjne</h3>
								<p>za granicę</p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long long-two">
						<a href="<?php echo home_url('zima/oferta/wypozyczalnia'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wypozyczalnia_Fun_race.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Wypożyczalnia FunRace</h3>
								<p>centrum testowe HEAD</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- DLACZEGO FUNRACE -->
<div class="reasons grid">
	<div class="cover"></div>
	<div class="container">
		<h2>Sprawdź dlaczego warto <span>wybrać FUNRACE</span></h2>
		<div class="wrapper flex flex-justify-between">
			<div class="element base5">
				<div class="inner">
					<div class="icon flex flex-items-center flex-justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/doswiadczenie.png" alt="doświadczenie">
					</div>
					<h3>Doświadczenie</h3>
					<p>Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego</p>
				</div>
			</div>
			<div class="element base5">
				<div class="inner">
					<div class="icon flex flex-items-center flex-justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/sprzet.png" alt="doświadczenie">
					</div>
					<h3>Sprzęt</h3>
					<p>Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego</p>
				</div>
			</div>
			<div class="element base5">
				<div class="inner">
					<div class="icon flex flex-items-center flex-justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/team.png" alt="doświadczenie">
					</div>
					<h3>Team</h3>
					<p>Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego</p>
				</div>
			</div>
			<div class="element base5">
				<div class="inner">
					<div class="icon flex flex-items-center flex-justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/pomysl.png" alt="doświadczenie">
					</div>
					<h3>Pomysł</h3>
					<p>Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego</p>
				</div>
			</div>
			<div class="element base5">
				<div class="inner">
					<div class="icon flex flex-items-center flex-justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/kompleksowa_obsluga.png" alt="doświadczenie">
					</div>
					<h3>Kompleksowa obsługa</h3>
					<p>Znajdujesz się w miejscu, w którym znajdziesz ofertę jakiej potrzebujesz. Oferta jest dla każdego</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="news grid">
	<div class="container">
		<h2>Sprawdź <span>co u nas słychać</span></h2>
		<div class="wrapper flex flex-column flex-row-mm flex-wrap-mm">
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/aktualnosci/1.jpg);"></div>
					<a href="#" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">15 grudnia 2017</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">Wyjazd na Słowację, ponad 20 zdjć w galerii</div>
                        <a href="#">czytaj dalej<span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></a>
					</div>
				</div>
			</div>
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/aktualnosci/2.jpg);"></div>
					<a href="#" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">21 grudnia 2017</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">Zobacz jak nasi instruktorzy poradzili sobie w Austrii</div>
                        <a href="#">czytaj dalej<span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></a>
					</div>
				</div>
			</div>
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/aktualnosci/3.jpg);"></div>
					<a href="#" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">21 grudnia 2017</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">Rozpoczęliśmy sezon oraz uaktualniliśmy ofertę</div>
                        <a href="#">czytaj dalej<span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></a>
					</div>
				</div>
			</div>
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/aktualnosci/4.jpg);"></div>
					<a href="#" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">12 stycznia 2017</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">Lorem ipsum se amet dolor</div>
                        <a href="#">czytaj dalej<span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- NEWSLETTER -->
<?php get_template_part("template/newsletter"); ?>
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>
