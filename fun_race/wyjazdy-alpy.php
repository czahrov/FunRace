<?php
	get_header();

	/*
	Template Name: wyjazdy-alpy
	*/
?>
<body id="wyjazdy-alpy">
 <header>
     <?php get_template_part("template/menu"); ?>
	<div class="poster-sub poster-single flex flex-justify-center flex-items-end">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Wyjazdy narciarskie w Aply</span></h2>
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
             <div class="title">Wyjazdy narciarskie w Alpy</div>
        </div>
        <div class="white-space-80"></div>
        
        <div class="content">
            <h3>Wyjazdy <span>Jesień/Zima</span> 2017/2018</h3>
        </div>
        
        <!-- wrapper -->
        
        <div class="wrapper wrapper-whole flex flex-justify-center flex-wrap">
            <a href="<?php echo home_url('zima/oferta/wyjazdy-alpy/stubai-austria'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center"> STUBAI - Austria 2-9.12.2017</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/wyjazdy-alpy'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Włochy - Ferie 22-27.01.2018</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/wyjazdy-alpy'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Włochy - Ferie 27.01-3.02.2018</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
             <a href="<?php echo home_url('zima/oferta/wyjazdy-alpy'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Włochy - Ferie 17-2402.2018</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="white-space-40"></div>
               <div class="content">
            <h3>Wyjazdy <span>Wiosna</span> 2018</h3>
        </div>
        
        <!-- wrapper -->
        
        <div class="wrapper wrapper2 flex flex-justify-center flex-wrap">
            <a href="<?php echo home_url('zima/oferta/wyjazdy-alpy'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center"> Madonna di Compiglio - Włochy 18-25.03.2018</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/wyjazdy-alpy'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/wyjazdy_integracyjne.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Livigno - Włochy 7-14.04.2018</div>
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