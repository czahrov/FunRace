<?php
	get_header();

	/*
	Template Name: lato rezerwuj
	*/
?>
<body class="lato" id="rezerwuj">
 <header>
    <?php get_template_part("template/menu-lato"); ?>	
		
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
		                    <div class="title">Rafting</div>
		                    <div class="icon">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
		                    </div>
		                </div>
		                <div class="select-options">
		                    <a href="<?php echo home_url('lato/rezerwuj/rafting'); ?>" class="option flex-justify-center flex-justify-start-mm">RAFTING na Dunajcu</a>
		                    <a href="<?php echo home_url('lato/rezerwuj/rafting'); ?>" class="option flex-justify-center flex-justify-start-mm">RAFTING na rzece Poprad</a>
		                    <a href="<?php echo home_url('lato/rezerwuj/rafting'); ?>" class="option flex-justify-center flex-justify-start-mm">RAFTING rzeka Váh – SŁOWACJA</a>
		                    <a href="<?php echo home_url('lato/rezerwuj/rafting'); ?>" class="option flex-justify-center flex-justify-start-mm">RAFTING rzeka Belá – SŁOWACJA</a>
		                </div>
		            </div>
		            <div class="select">
		                  <div class="select-head flex flex-items-center flex-justify-center"> 
                              <div class="title">Spływy kajakowe na Dunajcu</div>
                              <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
                                </div>
		                  </div>
		               <div class="select-options">
		                    <a href="<?php echo home_url('lato/rezerwuj/splywy-kajakowe-dunajec'); ?>" class="option flex-justify-center">Sromowce niżne - Szczawnica</a>
		                    <a href="<?php echo home_url('lato/rezerwuj/splywy-kajakowe-dunajec'); ?>" class="option flex-justify-center">Sromowce niżne - Krościenko</a>
		                    <a href="<?php echo home_url('lato/rezerwuj/splywy-kajakowe-dunajec'); ?>" class="option flex-justify-center">Niedzica - Szczawnica</a>
		                    <a href="<?php echo home_url('lato/rezerwuj/splywy-kajakowe-dunajec'); ?>" class="option flex-justify-center">Spływ kajakowy - zakopane</a>
		                    
		                </div>
		            </div>
	                   <div class="select">
		                  <div class="select-head flex flex-items-center flex-justify-center"> 
                              <div class="title">Szkoła kajakarstwa górskiego</div>
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
                                </div>
		                  </div>
		               <div class="select-options">
                            <a href="<?php echo home_url('lato\rezerwuj\szkola-kajakarstwa-gorskiego'); ?>" class="option flex-justify-center">Szkolenia indywidualne</a>
		                    <a href="<?php echo home_url('lato\rezerwuj\szkola-kajakarstwa-gorskiego'); ?>" class="option flex-justify-center">FUN WATER CAMP</a>
		                      <a href="<?php echo home_url('lato\rezerwuj\szkola-kajakarstwa-gorskiego'); ?>" class="option flex-justify-center">CANOE CAMP</a>
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

        </div>
    </div>
</div>



<!--PARTNERS-->
<?php get_template_part("template/partners"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>