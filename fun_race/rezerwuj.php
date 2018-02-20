<?php
	get_header();

	/*
	Template Name: rezerwuj
	*/
?>
<body id="rezerwuj">
 <header>
    <?php get_template_part("template/menu"); ?>	
		
	<div class="poster-sub poster-sub-rezerwuj flex flex-justify-center flex-items-center">
		<div class="cover"></div>
        <div class="filtr"></div>
		<div class="content">
			<h2>Fun&amp;Race <span class="block">Rezerwuj online</span></h2>
		</div>
		<div class="nav-act">
		<div class="grid">
		    <div class="container">
		        <div class="bar flex flex-column flex-row-mm">
		            <div class="select">
		                <div class="select-head flex flex-items-center flex-justify-center flex-justify-start-mm">
		                    <div class="title">Akademia Mamucik</div>
		                    <div class="icon">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
		                    </div>
		                </div>
		                <div class="select-options">
		                    <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-mamucik'); ?>" class="option flex-justify-center flex-justify-start-mm">kurs świąteczny dla dzieci</a>
		                    <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-mamucik'); ?>" class="option flex-justify-center flex-justify-start-mm">kurs feryjny dla dzieci</a>
		                    <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-mamucik'); ?>" class="option flex-justify-center flex-justify-start-mm">kurs mini dla dzieci</a>
		                    <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-mamucik'); ?>" class="option flex-justify-center flex-justify-start-mm">kurs snowboardowy dla dzieci</a>
		                </div>
		            </div>
		            <div class="select">
		                  <div class="select-head flex flex-items-center flex-justify-center"> 
                              <div class="title">Szkolenia indywidualne</div>
                              <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
                                </div>
		                  </div>
		               <div class="select-options">
		                    <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-indywidualne'); ?>" class="option flex-justify-center">Narty</a>
		                    <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-indywidualne'); ?>" class="option flex-justify-center">Snowboard</a>
		                </div>
		            </div>
	                   <div class="select">
		                  <div class="select-head flex flex-items-center flex-justify-center"> 
                              <div class="title">Szkolenia grupowe</div>
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
                                </div>
		                  </div>
		               <div class="select-options">
                            <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-grupowe'); ?>" class="option flex-justify-center">Narty</a>
		                    <a href="<?php echo home_url('zima/rezerwuj/rezerwuj-grupowe'); ?>" class="option flex-justify-center">Snowboard</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		</div>

	</div>
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
<?php get_template_part("template/partners"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>