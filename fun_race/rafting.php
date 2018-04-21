<?php
	/*
	Template Name: lato rafting
	*/
	
	$pages = get_pages( array(
		'parent' => get_post()->ID,
		
	) );
	
	get_header();
?>
<body id="rafting" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu-lato"); ?>		
		<?php banner(); ?>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!-- Mamucik -->
	<div class="mamucik alpy single">
		<div class="grid">
			<div class="container padding">
				<div class="normal">
					<h3>RAFTING</h3>
					<p>Rafting to spływ specjalistycznym pontonem przeznaczonym do raftingu górskiego, spienionym nurtem górskiej rzeki. W trakcie trwania takiego spływu, każdy uczestnik wyposażony jest w kamizelkę asekuracyjną, kask oraz wiosło. Każdorazowo na pontonie płynie ratownik lub instruktor kajakarstwa, który steruje pontonem oraz dba o bezpieczeństwo uczestników spływu.</p>
					<p>Rafting na Dunajcu lub rzece Poprad to przygoda, świetna zabawa z dawką adrenaliny. Malownicze okolice, piękne widoki oraz nurt górskiej rzeki, pozostaną na długo w pamięci uczestników. Atrakcje polecamy zarówno dla klientów indywidualnych, grup zorganizowanych jako element imprez integracyjnych jak również dla rodzin i osób lubiących aktywny wypoczynek.</p>
					<br>
					<p class="text-right">Zapoznaj się z ofertą spływów pontonowych i przeżyj z nami niezapomnianą przygodę!<br>
						FUNRACE Team
					</p>
				</div>
				<div class="white-space-80"></div>
				<div class="wrapper flex flex-justify-center flex-wrap">
					<?php foreach( $pages as $page ): ?>
					<a href="<?php the_permalink( $page->ID ) ?>" class="element">
						<div class="inner">
							<div class="picture" style="background-image: url(<?php echo get_the_post_thumbnail_url( $page->ID, 'medium' ); ?>);"></div>
							<div class="name">
								<div class="main flex flex-items-center flex-justify-center">
									<?php echo $page->post_title; ?>
								</div>
								<div class="sticker flex flex-items-center flex-justify-center">
								Zobacz ofertę
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
								</div>
							</div>
						</div>
					</a>
					<?php endforeach; ?>
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