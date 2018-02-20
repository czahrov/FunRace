<?php
	get_header();

	/*
	Template Name: imprezy-int
	*/
?>
<body id="imprezy-int">
 <header>
    <?php get_template_part("template/menu"); ?>

		
	<div class="poster-sub poster-single flex flex-justify-center flex-items-end">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Imprezy integracyjne</span></h2>
		</div>
	</div>
 </header>

     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- OFFER SINGLE -->
<div class="single grid">
    <div class="container padding">
        <div class="content">
            <div class="title">Imprezy dla firm</div>
                  <div class="white-space-40"></div>
            <p>Zimowa sceneria stwarza nowe możliwości realizacji niezapomnianych programów integracji. Oprócz standardowej oferty szkoleniowej: nauki jazdy na nartach, szkoleń sportowych, zawodów firmowych z profesjonalnym pomiarem czasu, możemy wzbogacić program o ciekawe atrakcje oraz bogaty program apres-ski.</p>
            <p class="bold">Skontaktuj się z nami i powierz nam realizację twoich marzeń.</p>
            <p>Anna Buczek kom: 501 724 216</p>
            <p>biuro@funrace.pl</p>
        </div>
        <div class="white-space-40"></div>
    </div>
</div>



<!--CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>
