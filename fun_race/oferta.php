<?php
	/*
	Template Name: oferta
	*/
	
	get_header();
?>
<body id="oferta" class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu"); ?>	
		<div class="poster-sub flex flex-justify-center flex-items-center">
			<div class="cover parallax"></div>
			<div class="filtr"></div>
			<div class="content">
				<h2>Fun&amp;Race <span class="block">Oferta zimowa</span></h2>
			</div>
		</div>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<!-- OFFER -->
	<div class="offer grid">
		<div class="container">
			<?php get_template_part( "template/oferta" ); ?>
		</div>
		<div style="padding-bottom: 90px;"></div>
	</div>
	<!--CONTACT BAR-->
	<?php get_template_part("template/contact-bar"); ?>
	<!--PARTNERS-->
	<?php get_template_part("template/partners"); ?>
	<!-- FOOTER -->
	<?php get_footer(); ?>