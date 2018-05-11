<?php
	get_header();

	/*
	Template Name: rezerwuj
	*/
?>
<body id="rezerwuj" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu"); ?>	
		
	<?php banner(); ?>
	<?php rezerwujMenu( getSeason() ); ?>
		
 </header>
 
 
    <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
	
<!-- REZERWUJ -->

<div class="rezerwuj">
    <div class="grid">
        <div class="container padding">
           <div class="content flex flex-column flex-items-center">
                <h2>System rezerwacji online</h2>
                <p>Za pomocą tego systemu będziesz mógł zarezerwować<br> szkolenie online. W tym celu należy wybrać jakie szkolenie Cię interesuje, <br>a następnie wypełnić i wysłać formularz</p>
                <div class="sub-title">W razie jakichkolweik kłopotów prosimy kontaktować się telefonicznie</div>
                <a href="tel: +48501724216" class="link flex flex-items-center">
                    Anna Buczek tel: +48 501 724 216
                </a>
            </div>
            <div class="images flex flex-justify-center flex-wrap">
                <div class="box flex flex-justify-center flex-items-center"><img src="<?php echo get_template_directory_uri(); ?>/img/szkola_narciarska.png" alt="akademia-mamucik"></div>
                <div class="box flex flex-justify-center flex-items-center"><img src="<?php echo get_template_directory_uri(); ?>/img/mamucik-akademia.jpg" alt="akademia-mamucik"></div>
            </div>
        </div>
    </div>
</div>



<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>