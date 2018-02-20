<?php
	get_header();

	/*
	Template Name: mamucik
	*/
?>
<body id="mamucik">
 <header>
      <?php get_template_part("template/menu"); ?>	
	<div class="poster-sub poster-single flex flex-justify-center flex-items-end">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Akademia Mamucik</span></h2>
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
            <div class="title">Akademia Narciarska MAMUCIK - kursy dla dzieci i młodzieży</div>
            <p>Zapraszamy wszystkie dzieci i młodzież na Jaworzynę Krynicką do pierwszej, profesjonalnej Akademii Narciarskiej MAMUCIK - miejsca szkoleń dla dzieci i młodzieży.</p>
            <p>Mamucik wraz z instruktorami Szkoły Narciarskiej FUNRACE stworzyli wyjątkowe miejsce, w którym nie tylko uczą dzieci i młodzież narciarstwa - z dbałością o poprawność techniczną nauczanych elementów, w formie zabawowej, z elementami rywalizacji, przy wykorzystaniu ciekawych ćwiczeń oraz różnorodnych pomocy dydaktycznych ale także uczą jak bezpiecznie i aktywnie spędzać wolny czas. <br>Jako jedyna szkoła narciarska na Jaworzynie Krynickiej realizujemy w naszej Akademii pierwszy w Polsce Program Nauczania Dzieci SITN-PZN którego jesteśmy współautorami.</p>
        </div>
        <div class="white-space-80"></div>
        <div class="content">
            <h3>Kursy akademi narciarskiej <span>Mamucik</span></h3>
        </div>
        
        <!-- wrapper -->
        
        <div class="wrapper flex flex-justify-center flex-wrap">
            <a href="<?php echo home_url('zima/oferta/mamucik/mamucik-swiateczny'); ?>" class="element">
                <div class="inner">
                    <div class="picture"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center"> Kurs świąteczny</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/mamucik/mamucik-feryjny'); ?>" class="element">
                <div class="inner">
                    <div class="picture"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Kurs feryjny</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/mamucik/mamucik-mini'); ?>" class="element">
                <div class="inner">
                    <div class="picture"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center"> Kurs mini</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/mamucik/mamucik-snowboardowy'); ?>" class="element">
                <div class="inner">
                    <div class="picture"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Kurs snowboardowy</div>
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







<!--CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>