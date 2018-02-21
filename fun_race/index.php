<?php
	get_header();
?>

<body id="intro">
    <header class="intro-poster flex">
        <div class="img img1"></div>
        <div class="img img2"></div>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_intro.png" alt="Fun_Race">
        <div class="circles flex flex-justify-center flex-items-center">
            <div class="wheel"></div>
            <div class="circle"></div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
        </div>
        <div class="links flex flex-justify-between">
            <a href="<?php echo home_url('zima'); ?>" class="flex flex-justify-center flex-items-center">oferta zimowa</a>
            <a href="<?php echo home_url('lato'); ?>" class="flex flex-justify-center flex-items-center"> oferta letnia</a>
        </div>
        <p>wszystkie prawa zastrzeżone FunRace.pl 2017</p>
    </header>
	<?php wp_footer(); ?>
</body>
</html>
