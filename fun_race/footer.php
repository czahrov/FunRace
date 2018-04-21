<footer>
    <div class="top grid">
       <div class="container">
            <div class="inner flex flex-justify-center flex-justify-between-ml flex-items-center flex-wrap">
                <div class="item base1 base3-ml no-shrink flex flex-justify-start flex-justify-center-mm"><i class="fa fa-mobile" aria-hidden="true"></i>Tel.: +48 501 724 216 <span>lub</span> +48 609 375 913</div>
                <div class="item base1 base3-ml no-shrink flex flex-justify-start flex-justify-center-mm"><i class="fa fa-map-marker" aria-hidden="true"></i>ul. Jana Pawła 54 34.460 Szczawnica</div>
                <div class="item base1 base3-ml no-shrink flex flex-justify-start flex-justify-center-mm"><i class="fa fa-envelope" aria-hidden="true"></i>biuro@funrace.pl</div>
            </div>
        </div>
    </div>
    <div class="middle grid">
        <div class="container">
            <div class="inner flex flex-justify-around flex-justify-between-ds flex-items-center flex-wrap">
				<?php dynamic_sidebar( 'footer-1' ); ?>
                <div class="item base1 base3-ml flex flex-items-center flex-justify-center flex-justify-start-ml">&copy; FunRace, 2017</div>
                <div class="item base1 base3-ml flex flex-items-center flex-justify-center">
					<a href="https://www.facebook.com/funracepl" class="box" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<!--<a href="#" class="box"><i class="fa fa-youtube" aria-hidden="true"></i></a>-->
					<a href="https://www.instagram.com/explore/tags/funrace/" class="box" target='_blank'><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="<?php echo home_url( sprintf( '%s/kontakt', getSeason() ) ); ?>" class="box"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    
                </div>
                <div class="item base1 base3-ml flex flex-items-center flex-justify-center flex-justify-end-ml">
					<a class="scepter" href="http://www.scepter.pl">Dlaczego Agencja interaktywna Scepter?</a>
				</div>
            </div>
        </div>
    </div>
    <!-- BOTTOM -->
    
    <div class="bottom grid">
        <div class="container">
            <div class="inner flex flex-justify-between flex-wrap">
                <div class="item base1 base2-ds no-shrink">
                    <h3>Szkoła narciarska i wypożyczalnia FunRace -</h3>
                    <p>Stacja Narciarska Jaworzyna Krynicka</p>
                    <p>ul. Czarny Potok 77, 33-380 Krynica Zdrój</p>
                    <h3>Wypożyczalnia FunRace -</h3>
                    <p>Stacja Narciarska Wierchomla, Wierchomla 22 33-350 Piwniczna Zdrój</p>
                </div>
                <div class="item base1 base2-ds no-shrink">
                    <p>Szkoła Narciarska i Snowbordowa z licencją SITN-PZN.</p>
                    <p>Akademia Narciarska MAMUCIK dla dzieci i młodzieży</p>
                    <p>Wypożyczalnia sprzętu narciarskiego - Centrum Testowe HEAD na Jaworzynie Krynickiej.</p>
                    <p>Kompleksowa organizacja wyjazdów firmowych i zimowych imprez integracyjnych.</p>
                    <p>Niezapomniane wyjazdy narciarskie w najpiękniejsze miejsca Europy.</p>
                </div>
                <div class="item full no-shrink flex flex-justify-center flex-justify-end-ds">
                    <div class="part flex flex-column flex-row-mm flex-justify-end flex-items-center">
                        <div class="text">partnerzy</div>
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/partnerzy/sitzn.png"></div>
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/partnerzy/pZn.png"></div>
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/partnerzy/head.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>

