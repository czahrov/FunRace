<?php
	$season = getSeason();
	$invert = $season === "zima"?("lato"):("zima");
	
?>
<nav class="flex flex-justify-between flex-items-center">
	<a href="<?php echo home_url( $season ); ?>" class="logo no-shrink">
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
			
			<li><a href="<?php echo home_url("{$season}/o-nas"); ?>">O nas</a></li>
			
			<li id="offer">
			
				<a href="<?php echo home_url("{$season}/oferta"); ?>">Oferta</a>
			
				<div class="dropdown flex">
					<div class="drop-container base1 flex flex-wrap">
						<?php
							$pages = get_pages( array(
								"parent" => get_page_by_path( sprintf( "%s/oferta", getSeason() ) )->ID,
								
							) );
							
							foreach( $pages as $page ):
						?>
						<div class="item base1 base2-mm">
							<a href="<?php the_permalink( $page->ID ); ?>" class="flex flex-items-center">
								<?php echo $page->post_title; ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png">
							</a>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				
			</li>
			<li><a href="<?php echo home_url("{$season}/referencje"); ?>">Referencje</a></li>
			<li><a href="<?php echo home_url("{$season}/aktualnosci"); ?>">Aktualności</a></li>
			<li><a href="<?php echo home_url("{$season}/kontakt"); ?>">Kontakt</a></li>
			
			<li class="menu-social flex flex-justify-center">
				<div class="icon"><a href="https://www.facebook.com/funracepl" class="box" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
				<!--<div class="icon"><a href="#" class="box"><i class="fa fa-youtube" aria-hidden="true"></i></a></div>-->
				<div class="icon"><a href="https://www.instagram.com/explore/tags/funrace/" class="box" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
			<li>
		</ul>

	</div>
	<div class="nav-end hide flex-dm no-shrink">
		<a href="<?php echo home_url("{$season}/rezerwuj"); ?>" class="booking flex flex-items-center flex-justify-center">Rezerwuj online</a>
		<a href="<?php echo home_url("{$invert}"); ?>" class="season flex flex-column-dm flex-items-center flex-justify-center winter">
			<span class="nana">Oferta</span>
			<span class="year">
				<?php echo $invert; ?>
			</span>
			<span class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></span>
		</a>
	</div>
</nav>