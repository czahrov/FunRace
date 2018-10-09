<?php
/*
	Template Name: intro
*/
	get_header();
?>

<body id="intro">
    <header class="intro-poster flex">
        <div class="img skier" style='background-image:url( <?php echo wp_get_attachment_image_url( get_post_meta( get_post()->ID, 'zima', true ), 'full' ); ?> );'></div>
        <div class="img biker" style='background-image:url( <?php echo wp_get_attachment_image_url( get_post_meta( get_post()->ID, 'lato', true ), 'full' ); ?> );'></div>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_intro_alt.png" alt="Fun_Race">
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
        <p>wszystkie prawa zastrzeżone &copy; FunRace.pl <?php echo date('Y'); ?></p>
    </header>
	<?php wp_footer(); ?>
</body>
</html>
