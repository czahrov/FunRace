<?php
	get_header();

	/*
	Template Name: lato rafting poprad
	*/
	?>
<body id="rafting" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu"); ?>
		<?php banner(); ?>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!-- Mamucik -->
	<div class="mamucik alpy">
		<div class="grid">
			<div class="container padding">
				<!-- SPŁYWY POPRAD -->
				<div class="intro flex flex-column flex-row-ds">
					<div class="col col2 flex flex-column flex-row-ds">
						<div class="images flex flex-column flex-row-mm flex-justify-around flex-justify-around-start-ml flex-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lato/splywy-poprad.jpg" alt="nowość">
						</div>
						<div class="images flex flex-column flex-row-mm flex-justify-around flex-items-center">
							<div class="text max">
								RAFTING na rzece Poprad
								<p>Poprad to górska rzeka, mająca swe źródła w Tatrach Słowackich na wysokości niemal 2000 m n.p.m. Poprad tworzy malowniczy przełom rzeczny z licznymi meandrami. Na znacznej długości jest rzeką graniczną, oddzielającą terytoria Polski i Słowacji. Wynosząca 10 km trasa spływu dostarcza wspaniałych widoków, niezapomnianych wrażeń oraz dreszczyku emocji przy pokonywaniu najtrudniejszych odcinków.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="intro flex flex-column">
					<!-- col1-->
					<div class="col col1 flex flex-column">
						<div class="boxes">
							<div class="box">
								<div class="bar flex flex-items-center">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ludzik.png" alt="rodzaj"></div>
									<div class="title">Dla kogo?</div>
								</div>
								<div class="content">
									<p>klienci indywidualni: dzieci, dorośli, grupy zorganizowane, grupy szkolne, spływy rodzinne </p>
								</div>
							</div>
							<div class="box">
								<div class="bar flex flex-items-center">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/lokalizacja.png" alt="miejsce"></div>
									<div class="title">Trasa</div>
								</div>
								<div class="content">
									<div class="simple-list">
										<h3>1. Muszyna → Andrzejówka Ługi</h3>
										<ul>
											<li>Długość: 10,5 km</li>
											<li>Czas trwania: 1-3h (w zależności od aktualnego poziomu wody)</li>
										</ul>
										<h3>2. Leluchów → Muszyna</h3>
										<ul>
											<li>Długość: 10 km</li>
											<li>Czas trwania: 1-3h (w zależności od aktualnego poziomu wody)</li>
										</ul>
										<h3>3. Piwniczna Zdrój → Rytro</h3>
										<ul>
											<li>Długość: 10,5 km</li>
											<li>Czas trwania: 1,5-2,5h (w zależności od aktualnego poziomu wody) </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="bar flex flex-items-center">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/kalendarz.png" alt="termin"></div>
									<div class="title">Terminy w sezonie 2017:</div>
								</div>
								<div class="content">
									<div class="simple-list">
										<ul>
											<li> spływy pontonowe organizowane są od kwietnia do października</li>
											<li>wymagamy wcześniejszej rezerwacji telefonicznej</li>
											<li>dla grup zorganizowanych istnieje możliwość indywidualnego ustalenia godz. rozpoczęcia</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- col2-->
					<div class="col col2">
						<div class="under-list under-list-padding flex flex-column flex-row-mm">
							<div class="base1 base2-mm">
								<div class="average-list">
									<h3>Zapewniamy</h3>
									<ul>
										<li>specjalistyczne pontony raftingowe WATS</li>
										<li>atestowany sprzęt: kamizelki asekuracyjne, wiosła, kaski</li>
										<li>akcesoria wodoszczelne</li>
										<li>opiekę instruktora sternika</li>
										<li>opłatę wstępu do PPN</li>
									</ul>
									<p>Sprzęt posiada niezbędne certyfikaty i atesty</p>
								</div>
							</div>
							<div class="base1 base2-mm">
								<div class="average-list">
									<h3>Dodatkowe informacje</h3>
									<ul>
										<li>minimalna ilość uczestników: 4</li>
										<li>* spływy pontonowe organizowane są od kwietnia do października – codziennie, przy wymaganej, minimalnej frekwencji</li>
										<li>przy mniejszej frekwencji prosimy o kontakt telefoniczny.</li>
										<li>wymagamy wcześniejszej rezerwacji telefonicznej lub mailowej</li>
										<li>transport: zapewniamy transport dla klientów indywidualnych i grup zorganizowanych</li>
										<li>instruktorzy: o komfort i bezpieczeństwo klientów dbają instruktorzy posiadający uprawnienia Instruktora Sportu – kajakarstwo górskie oraz Mistrzowie Polski w kajakarstwie górskim</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- CONTACT BAR-->
	<?php get_template_part("template/contact-bar"); ?>
	<!-- NEWSLETTER -->
	<?php get_template_part("template/partners-full"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>