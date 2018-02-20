<?php
	get_header();
	/*
	Template Name: szkolenia ind-grup
	*/
?>
<body id="szkolenia-ind-grup">
 <header>
    <?php get_template_part("template/menu"); ?>
	<div class="poster-sub poster-single flex flex-justify-center flex-items-end">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Szkolenia indywidualne i grupowe</span></h2>
		</div>
	</div>
 </header>
    <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- OFFER SINGLE -->
<div class="single grid">
    <div class="container padding">
        <div class="content">
            <h3><span>Dołącz</span> do nas tej zimy</h3>
            <div class="title">SZKOLENIA INDYWIDUALNE I GRUPOWE – dla dorosłych i dzieci</div>
        </div>
        <div class="white-space-80"></div>
        <div class="content">
            <h3><span>Szkolenia indywidualne i grupowe</span> - dla dorosłych i dzieci</h3>
        </div>
        
        <!-- wrapper -->
        
        <div class="wrapper wrapper-whole flex flex-justify-center flex-wrap">
            <a href="<?php echo home_url('zima/oferta/szkolenia-narciarskie/szkolenia-indywidualne'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/sitn_pzn.jpg)"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center"> Szkolenia indywidualne</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/szkolenia-narciarskie/szkolenia-grupowe'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg)"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Szkolenia grupowe</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/szkolenia-narciarskie/szkolenia-head'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wypozyczalnia_Fun_race.jpg)"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center"> Szkolenia - system head way</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
    </div>
</div>


<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>