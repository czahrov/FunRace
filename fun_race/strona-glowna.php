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
		<?php mainSlider( 'zima/slider' ); ?>
		
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
		<div class="wrapper flex flex-justify-center">
			<?php
				$data = dlaczegoFunRace();
				
				foreach( $data as $name => $item ):
			?>
			<div class="element base1 base2-mm base3-ml base4-ds base5-dm">
				<div class="inner">
					<div class="icon flex flex-items-center flex-justify-center">
						<img src="<?php printf( "%s%s", get_template_directory_uri(), $item[ 'icon' ] ); ?>" alt="<?php echo $name; ?>">
					</div>
					<h3><?php echo $name; ?></h3>
					<p><?php echo $item[ 'text' ]; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
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
