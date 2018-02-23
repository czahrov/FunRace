<?php
	get_header();

	/*
	Template Name: lato splywy dunajec
	*/
?>
<body class="lato" id="splywy-kajakowe">
 <header>
     <?php get_template_part("template/menu-lato"); ?>
	<?php banner(); ?>
 </header>
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- OFFER SINGLE -->
<div class="single grid">
    <div class="container padding">
        <div class="content">
            <h3><span>Dołącz</span> do nas tego lata</h3>
             <p>Spływy kajakowe na Dunajcu to idealna propozycja dla osób chcących połączyć aktywny wypoczynek  z możliwością podziwiania krajobrazu pienińskiej przyrody. Do dyspozycji klientów przygotowaliśmy trzy trasy o zróżnicowanej długości, które umożliwiają spływy kajakowe dla każdego poziomu zaawansowania. Profesjonalny, turystyczny sprzęt wraz z kompleksową obsługą zapewnia komfort wypoczynku i niezapomnianą zabawę na Dunajcu!
            </p>
            <p>
            Istnieje możliwość zorganizowania spływu pod opieką instruktorów kajakarstwa górskiego, Mistrzów Polski w kajakarstwie górskim.</p>
        </div>
        <div class="white-space-80"></div>
        
        <div class="content">
            <h3>Trasy spływów kajakowych <span> na Dunajcu</span></h3>
        </div>
        
        <!-- wrapper -->
        
        <div class="wrapper wrapper-whole flex flex-justify-center flex-wrap">
            <a href="<?php echo home_url('lato/oferta/splywy-kajakowe/sromowce-nizne-szczawnica'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/splywy-dunajec.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Sromowce niżne - szczawnica</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('lato/oferta/splywy-kajakowe/sromowce-nizne-kroscienko'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/splywy-dunajec2.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Sromowce Niżne - Krościenko n/Dunajcem</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('lato/oferta/splywy-kajakowe/niedzica-szczawnica'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/splywy-dunajec3.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Niedzica - Szczawnica</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
             <a href="<?php echo home_url('lato/oferta/splywy-kajakowe/zakopane'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/splywy-dunajec4.jpg);"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Spływy kajakowe Zakopane</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <!-- // end wrapper -->
        

        
    </div>
</div>


<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar-lato"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>