	<nav class="flex flex-justify-between flex-items-center">
		<a href="<?php echo home_url('zima'); ?>" class="logo no-shrink">
			<img src="<?php echo get_template_directory_uri(); ?>/img/FUNRACE_logo-1200x334.png" alt="Fun Race">
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
				
				<li><a href="<?php echo home_url('zima/o-nas'); ?>">O nas</a></li>
				
				<li id="offer">
				
					<a href="<?php echo home_url('zima/oferta'); ?>">Oferta</a>
				
					<div class="dropdown flex">
						<div class="drop-container base1 base2-dm">
							<ul>
								<li><a href="<?php echo home_url('zima/oferta/szkolenia-narciarskie'); ?>">Szkolenia indywidualne i grupowe <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/szkolenia-race'); ?>">szkolenia sportowe race<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/imprezy-integracyjne'); ?>">Imprezy integracyjne<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/zawody-narciarskie'); ?>">Organizacja zawodów narciarskich<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/wypozyczalnia'); ?>">Wypożyczalnia funrace - centrum testowe head<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
							</ul>
						</div>
						<div class="drop-container base1 base2-dm">
							<ul>
								<li><a href="<?php echo home_url('zima/oferta/mamucik'); ?>">Akademia Narciarska mamucik<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/wyjazdy-alpy'); ?>">Wyjazdy narciarskie<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/telemark'); ?>">Telemark<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/ski-toury'); ?>">Ski toury / rakiety śnieżne<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
								<li><a href="<?php echo home_url('zima/oferta/kursy-instruktorskie'); ?>">Kursy instruktorskie sitn pzn<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></a></li>
							</ul>
						</div>
					</div>
					
				</li>
				<li><a href="<?php echo home_url('zima/referencje'); ?>">Referencje</a></li>
				<li><a href="<?php echo home_url('zima/aktualnosci'); ?>">Aktualności</a></li>
				<li><a href="<?php echo home_url('zima/kontakt'); ?>">Kontakt</a></li>
				
				<li class="menu-social flex flex-justify-center">
					<div class="icon"><a href="#" class="box"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
					<div class="icon"><a href="#" class="box"><i class="fa fa-youtube" aria-hidden="true"></i></a></div>
				<li>
			</ul>

		</div>
		<div class="nav-end hide flex-dm no-shrink">
			<a href="<?php echo home_url('zima/rezerwuj'); ?>" class="booking flex flex-items-center flex-justify-center">Rezerwuj online</a>
			<a href="<?php echo home_url('lato'); ?>" class="season flex flex-column-dm flex-items-center flex-justify-center winter">
				<span class="nana">Oferta</span>
				<span class="year">Lato</span>
				<span class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span>
			</a>
		</div>
	</nav>