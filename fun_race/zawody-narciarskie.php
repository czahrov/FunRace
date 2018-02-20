<?php
	get_header();
	/*
	Template Name: zawody narciarskie
	*/
?>
<body id="zawody-narciarskie">
 <header>
    <?php get_template_part("template/menu"); ?>		
	<div class="poster-sub poster-single flex flex-justify-center flex-items-end">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Organizacja zawodów narciarskich</span></h2>
		</div>
	</div>
 </header>

    <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>



<!-- Mamucik -->
<div class="mamucik">
    <div class="grid">
        <div class="container padding text-padding">
            <div class="white-space-40"></div>
           <div class="average-list">
                                    <p>Zajmujemy się profesjonalną i  kompleksową organizacją zawodów narciarskich dla firm, szkół oraz grup zorganizowanych.</p>
                                    <div class="white-space-40"></div>
                                    <h3>Zapewniamy:</h3>
                                    <ul>
                                        <li>                 Wynajęcie stoku</li>
                                        <li>Ustawienie trasy slalomu giganta bądź slalomu przez trenerów narciarstwa alpejskiego</li>
                                        <li>Elektroniczny pomiar czasu</li>
                                        <li>Zabezpieczenie trasy</li>
                                        <li>Biuro zawodów</li>
                                        <li>Numer startowe</li>
                                    </ul>
                                      <h3>Dodatkowo:</h3>
                                      <ul>
                                          <li>Numery startowe z logo firmy</li>
                                          <li>Konferansjer</li>
                                          <li>Nagłośnienie</li>
                                      </ul>
                                      <h3>Skontaktuj się z nami, a z pewnością opracujemy program zimowych zmagań na miarę twoich oczekiwań.</h3>
                                      <p>Anna Buczek 501 724 216</p>
                                      <p>biuro@funrace.pl</p>
                                </div>
                                <div class="white-space-80"></div>
            </div>
        </div>
    </div>

<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>