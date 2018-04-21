<?php
	get_header();
	
	/*
	Template Name: lato rafting bela
	*/
	?>
<body id="rafting" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu-lato"); ?>		
		<?php banner(); ?>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!-- Mamucik -->
	<div class="mamucik alpy">
		<div class="grid">
			<div class="container padding">
				<!-- SPŁYWY RAFTING rzeka Belá – SŁOWACJA -->
				<div class="intro flex flex-column flex-row-ds">
					<div class="col col2 flex flex-column flex-row-ds">
						<div class="images flex flex-column flex-row-mm flex-justify-around flex-justify-around-start-ml flex-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/lato/ponton2.jpg" alt="nowość">
						</div>
						<div class="images flex flex-column flex-row-mm flex-justify-around flex-items-center">
							<div class="text max">
								RAFTING rzeka Belá – SŁOWACJA
								<p>Wyjątkowy rafting na najbardziej rwącej rzece na Słowacji – Belá, przepływającej przepiękną scenerią przyrody tatrzańskiej bezpośrednio pod szczytem Kriváň. Przezroczysta woda rzeki i dzika przyroda przynosi niezapomniane wrażenia każdemu uczestnikowi. Zgranie załogi jest, w licznych wąskich przejazdach i trudnych punktach, warunkiem koniecznym.<br>
									UWAGA: spływ możliwy tylko kwiecień-maj lub po okresach deszczowych!
								</p>
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
									<p>klienci indywidualni: dorośli, grupy zorganizowane</p>
								</div>
							</div>
							<div class="box">
								<div class="bar flex flex-items-center">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/lokalizacja.png" alt="miejsce"></div>
									<div class="title">Trasa</div>
								</div>
								<div class="content">
									<p>Podbanské → Liptovský Hrádok</p>
								</div>
							</div>
							<div class="box">
								<div class="bar flex flex-items-center">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/czas.png" alt="czas trwania"></div>
									<div class="title">Czas trwania</div>
								</div>
								<div class="content">
									<p>1,5h – 2h</p>
								</div>
							</div>
							<div class="box">
								<div class="bar flex flex-items-center">
									<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/kalendarz.png" alt="termin"></div>
									<div class="title">Terminy w sezonie 2016:</div>
								</div>
								<div class="content">
									<p>spływy pontonowe organizowane są w okresie kwiecień-maj lub po okresach deszczowych </p>
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
										<li>minimalna ilość uczestników: 10</li>
										<li>wymagamy wcześniejszej rezerwacji telefonicznej lub mailowej</li>
										<li>instruktorzy: o komfort i bezpieczeństwo klientów dbają instruktorzy posiadający uprawnienia Instruktora Sportu – kajakarstwo górskie oraz Mistrzowie Polski w kajakarstwie górskim </li>
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