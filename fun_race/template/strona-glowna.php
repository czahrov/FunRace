<body class='<?php do_action( 'body_hook' ); ?>'>
	<header>
		<?php get_template_part("template/menu"); ?>
		<div id="slider-main" class="poster flex flex-justify-center">
			<?php mainSlider( sprintf( '%s/slider', getSeason() ) ); ?>
		</div>
	</header>

	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<?php get_template_part('template/segment', 'kafelki_ofertowe'); ?>

	<!-- DLACZEGO FUNRACE -->
	<?php get_template_part( 'template/segment/dlaczego' ); ?>

	<?php get_template_part( 'template/segment/aktualnosci' ); ?>

	<!-- NEWSLETTER -->
	<?php get_template_part("template/newsletter"); ?>
	<?php get_template_part("template/partners-full"); ?>