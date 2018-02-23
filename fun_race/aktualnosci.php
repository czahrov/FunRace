<?php
	get_header();

	/*
	Template Name: aktualnosci
	*/
?>
<body id="aktualnosci">
 <header>
    <?php get_template_part("template/menu"); ?>
		
	<?php banner(); ?>
		<div class="nav-act">
		<div class="grid">
		    <div class="container">
		        <div class="bar flex flex-column flex-row-mm">
		            <div class="select">
		                <div class="select-head flex flex-items-center flex-justify-center flex-justify-start-mm">
		                    <div class="title">Wszystkie kategorie</div>
		                    <div class="icon">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
		                    </div>
		                </div>
		                <div class="select-options">
		                    <div class="option flex-justify-center flex-justify-start-mm">wydarzenia</div>
		                    <div class="option flex-justify-center flex-justify-start-mm">aktualności</div>
		                    <div class="option flex-justify-center flex-justify-start-mm">zawody narciarskie</div>
		                </div>
		            </div>
		            <div class="select">
		                  <div class="select-head flex flex-items-center flex-justify-center"> 
                              <div class="title">Sezon 2017</div>
                              <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
                                </div>
		                  </div>
		               <div class="select-options">
		                    <div class="option flex-justify-center">Sezon 2016</div>
		                    <div class="option flex-justify-center">Sezon 2015</div>
		                    <div class="option flex-justify-center">Sezon 2014</div>
		                </div>
		            </div>
		            <div class="select">
		                  <div class="select-head flex flex-items-center flex-justify-center"> <div class="title">Sezon Zimowy</div>
		                  <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
                                </div>
		                  </div>
		                  <a href="<?php echo home_url('lato\aktualnosci'); ?>" class="select-options">
		                    <div class="option flex-justify-center">Sezon Letni</div>
		                  </a>
		            </div>
		        </div>
		    </div>
		</div>
		</div>
 </header>
 
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
	
<!-- AKTUALNOSCI -->

<div class="aktualnosci">
    <div class="grid">
        <div class="container padding">
                   <div class="main flex flex-column flex-row-ml">
                       <div class="post">
                           <div class="post-pic" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/aktualnosci1.jpg);"></div>
                           <div class="content">
                               <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                               <p><span class="emp">"Lorem ipsum dolor sit amet, </span>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                               <div class="share flex flex-items-center">
                                   <div class="icon">
                                       <img src="<?php echo get_template_directory_uri(); ?>/img/share.png" alt="share">
                                   </div>
                                   <div class="text">Udostępnij</div>
                               </div>
                           </div>
                       </div>
                       
                       <div class="side">
                           <div class="inner">
                               <div class="head">
                                   <div class="info-bar flex flex-items-center">
                                       <div class="date">21 grudnia 2017</div>
                                       <div class="share flex flex-items-center">
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/share.png" alt="share">
                                            </div>
                                            <div class="text">Udostępnij</div>
                                       </div>
                                   </div>
                                   <div class="title">Zobacz jak nasi instruktorzy poradzili sobie w Austrii</div>
                               </div>
                               <div class="side-nav">
                                  <div class="row flex flex-items-center">
                                      <div class="content">
                                           <div class="date">15 grudnia 2017</div>
                                           <div class="side-title">Wyjazd na Słowację, ponad 20 zdjęć w galerii</div>
                                       </div>
                                   </div>
                                   <div class="row flex flex-items-center">
                                      <div class="content">
                                           <div class="date">15 grudnia 2017</div>
                                           <div class="side-title">Rozpoczęliśmy sezon oraz uaktualniliśmy ofertę</div>
                                       </div>
                                   </div>
                                    <div class="row flex flex-items-center">
                                      <div class="content">
                                           <div class="date">15 grudnia 2017</div>
                                           <div class="side-title">ea commodo consequat</div>
                                       </div>
                                   </div>
                                   <div class="row flex flex-items-center">
                                      <div class="content">
                                           <div class="date">15 grudnia 2017</div>
                                           <div class="side-title">minim veniam</div>
                                       </div>
                                   </div>
                                     <div class="row flex flex-items-center">
                                      <div class="content">
                                           <div class="date">15 grudnia 2017</div>
                                           <div class="side-title">cillum dolore eu fugiat nulla pariatur.</div>
                                       </div>
                                   </div>
                               </div>
                                   
                           </div>
                       </div>
                   </div>
        </div>
    </div>
</div>





<!--PARTNERS-->
<?php get_template_part("template/partners"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>
