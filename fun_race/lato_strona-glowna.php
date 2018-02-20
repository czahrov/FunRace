<?php
	get_header();

	/*
	Template Name: lato
	*/
?>

<body class="lato">
 <header>
    <?php get_template_part("template/menu-lato"); ?>
		
	<div class="poster flex flex-items-center" id="slider-main">
           <div class="slide flex flex-column flex-justify-center show">
                <div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/kajak.jpg);"></div>
                <div class="content">
                    <h2>Spływy kajakowe <span class="block">na Dunajcu</span></h2>
                    <a href="#" class="flex flex-items-center flex-justify-center">sprawdź szczegóły</a>
                </div>
	        </div>
	        <div class="slide flex flex-column flex-justify-center">
                <div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/park-linowy.jpg);"></div>
                <div class="content">
                    <h2>Park <span class="block">Linowy</span></h2>
                    <a href="#" class="flex flex-items-center flex-justify-center">sprawdź szczegóły</a>
                </div>
	        </div>
           
            <div class="slide flex flex-column flex-justify-center">
                <div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/rower.jpg);"></div>
                <div class="content">
                    <h2><span class="block">Rowery</span></h2>
                    <a href="#" class="flex flex-items-center flex-justify-center">sprawdź szczegóły</a>
                </div>
	        </div>

		
		<div class="labels flex flex-items-end">
			<div class="label base3 flex flex-items-center active">
				<p>Spływy kajakowe<span class="block">Na Dunajcu</span></p>
				<div class="sticker" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/kajak.jpg)"></div>
			</div>
			<div class="label base3 flex flex-items-center">
				<p>Park<span class="block">Linowy</span></p>
				<div class="sticker" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/park-linowy.jpg)"></div>
			</div>
			<div class="label base3 flex flex-items-center">
				<p><span class="block">Rowery</span></p>
				<div class="sticker" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/rower.jpg)"></div>
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
						Planujesz urlop w Pieninach? Zapoznaj się z naszą ofertą i spędź go aktywnie z FUNRACE!
						</p>
					</div>
					<div class="box base1">
						<a href="<?php echo home_url('lato\oferta\rafting'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/banery/rafting.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Rafting</h3>
								<p></p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long">
						<a href="<?php echo home_url('lato\oferta\splywy-kajakowe'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/kajak.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Spływy kajkowe</h3>
								<p>na Dunajcu</p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long long-two">
						<a href="<?php echo home_url('lato\oferta\wypozyczalnia-kajakow'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/wypozyczalnia-kajakow.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Wypożyczalnia kajaków na Dunajcu</h3>
								<p>Szczawnica, Niedzica, Krościenko n/Dnajcem</p>
							</div>
						</a>
					</div>
					<div class="box base1">
						<a href="<?php echo home_url('lato\oferta\szkola-kajakarstwa-gorskiego'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/banery/kajakarstwo-gorskie.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Szkoła kajakarstwa</h3>
								<p>górskiego</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col col2 base1">
				<div class="inner flex flex-wrap">
					<div class="box base1 base2-mm long">
						<a href="<?php echo home_url('lato\oferta\imprezy-integracyjne'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/imprezy-integracyjne.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Imprezy integracyjne</h3>
								<p>dla dzieci</p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long long-two">
						<a href="<?php echo home_url('lato\oferta\rowery'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/rower.jpg)"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Rowery</h3>
								<p></p>
							</div>
						</a>
					</div>
					<div class="box base1">
						<a href="<?php echo home_url('lato\oferta\oferta-dla-szkol'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/szkola.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Oferta dla szkół</h3>
								
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long">
						<a href="<?php echo home_url('lato\oferta\off-road'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/off-road.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Off-Road</h3>
								<p></p>
							</div>
						</a>
					</div>
					<div class="box base1 base2-mm long long-two">
						<a href="<?php echo home_url('lato\oferta\park-linowy'); ?>" class="inside">
							<div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/park-linowy.jpg);"></div>
							<div class="cover flex flex-justify-center flex-items-center">
								<div class="link flex flex-justify-between flex-items-center">oferta <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span></div>
							</div>
							<div class="label">
								<h3>Park linowy</h3>
								<p></p>
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
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/splywy-dunajec2.jpg);"></div>
					<a href="#" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">15 grudnia 2017</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">Suspendisse varius volutpat urna non aliquet.</div>
                        <a href="#">czytaj dalej<span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></a>
					</div>
				</div>
			</div>
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/ponton.jpg);"></div>
					<a href="#" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">21 grudnia 2017</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">Duis rutrum ante a lectus tempus, nec venenatis nibh lacinia.</div>
                        <a href="#">czytaj dalej<span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></a>
					</div>
				</div>
			</div>
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/rafting.jpg);"></div>
					<a href="#" class="filtr"></a>
					<div class="label">
					    <div class="flex">
					        <div class="date">21 grudnia 2017</div>
					        <div class="tag">aktualności</div>
					    </div>
					    <div class="text">Phasellus et rutrum enim.</div>
                        <a href="#">czytaj dalej<span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></span></a>
					</div>
				</div>
			</div>
			<div class="element base1 base2-mm base4-dm no-shrink">
				<div class="inner">
					<div class="cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/rower.jpg);"></div>
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
<?php get_template_part("template/newsletter-lato"); ?>
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>
