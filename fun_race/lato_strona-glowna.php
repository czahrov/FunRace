<?php
	get_header();

	/*
	Template Name: lato
	*/
?>

<body class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu-lato"); ?>
	<div class="poster flex flex-items-center" id="slider-main">
		<?php mainSlider( 'lato/slider' ); ?>
		
	</div>
 </header>
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
	<?php get_template_part('template/segment', 'kafelki_ofertowe'); ?>
	
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
