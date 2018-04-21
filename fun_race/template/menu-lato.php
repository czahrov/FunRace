	<nav class="flex flex-justify-between flex-items-center">
		<a href="<?php echo home_url('lato'); ?>" class="logo no-shrink">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Fun Race">
		</a>
		<div class="menu flex flex-justify-end flex-justify-center-dm flex-items-center grow ">
			<button class="hamburger hide-dm">
				<div class="inner">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
		
			<ul class="flex flex-column flex-row-dm flex-items-center flex-justify-between closed">
				
				<li><a href="<?php echo home_url('lato\o-nas'); ?>">O nas</a></li>
				
				<li id="offer">
				
					<a href="<?php echo home_url('lato\oferta'); ?>">Oferta</a>
				
					<div class="dropdown flex">
						<div class="drop-container base1 base2-dm">
							<ul>
								<li><a href="<?php echo home_url('lato\oferta\rafting'); ?>">Rafting <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('lato\oferta\splywy-kajakowe'); ?>">Spływy kajakowe na Dunajcu<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('lato/oferta/wypozyczalnia-kajakow'); ?>">Wypożyczalnia kajaków<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('lato\oferta\szkola-kajakarstwa-gorskiego'); ?>">Szkoła kajakarstwa górskiego<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('lato\oferta\imprezy-integracyjne'); ?>">Imprezy integracyjne<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
							</ul>
						</div>
						<div class="drop-container base1 base2-dm">
							<ul>
								<li><a href="<?php echo home_url('lato\oferta\rowery'); ?>">Rowery<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('lato\oferta\oferta-dla-szkol'); ?>">Oferta dla szkół<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('lato\oferta\off-road'); ?>">Off-road<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('lato\oferta\park-linowy'); ?>">Park linowy<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a></a></li>
							</ul>
						</div>
					</div>
					
				</li>
				<li><a href="<?php echo home_url('lato/referencje'); ?>">Referencje</a></li>
				<li><a href="<?php echo home_url('lato\aktualnosci'); ?>">Aktualności</a></li>
				<li><a href="<?php echo home_url('lato\kontakt'); ?>">Kontakt</a></li>
				
				<li class="menu-social flex flex-justify-center">
					<div class="icon"><a href="#" class="box"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
					<div class="icon"><a href="#" class="box"><i class="fa fa-youtube" aria-hidden="true"></i></a></div>
				<li>
			</ul>

		</div>
		<div class="nav-end hide flex-dm no-shrink">
			<a href="<?php echo home_url('lato/rezerwuj'); ?>" class="booking flex flex-items-center flex-justify-center">Rezerwuj online</a>
			<a href="<?php echo home_url('zima'); ?>" class="season flex flex-column-dm flex-items-center flex-justify-center winter">
				<span class="nana">Oferta</span>
				<span class="year">zima</span>
				<span class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span>
			</a>
		</div>
	</nav>