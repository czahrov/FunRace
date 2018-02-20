<?php
	get_header();

	/*
	Template Name: lato park linowy
	*/
?>
<body class="lato" id="park-linowy">
 <header>
    <?php get_template_part("template/menu-lato"); ?>		
	<div class="poster-sub poster-single flex flex-justify-center flex-items-end">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Park Linowy</span></h2>
		</div>
	</div>
 </header>

     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>



<!-- Mamucik -->
<div class="mamucik alpy">
    <div class="grid">
        <div class="container padding" style="border-bottom: 0;">
                
                
                
                
            
        </div>

    </div>
    </div>
    



<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar-lato"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>