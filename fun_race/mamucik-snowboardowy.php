<?php
	get_header();

	/*
	Template Name: mamucik-snowboardowy
	*/
?>
<body id="mamucik-snowboardowy" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu"); ?>	
	<?php banner(); ?>
 </header>

     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>



<!-- Mamucik -->
<div class="mamucik">
    <div class="grid">
        <div class="container padding">
            <div class="intro flex flex-column">
                    <!-- col1-->
                <div class="col col1 flex flex-column flex-row-ml">
                    <div class="image flex flex-items-start flex-justify-center"><img src="<?php echo get_template_directory_uri(); ?>/img/mamucik-snowboardowy.jpg" alt="mamucik-kurs-snowboardowy"></div>
                    <div class="boxes">
                        <div class="box">
                            <div class="bar flex flex-items-center">
                                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ludzik.png" alt="osoba"></div>
                                <div class="title">Dla kogo?</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>dzieci i młodzież w wieku 8-15 lat</li>
                                </ul>
                            </div>
                        </div>
                          <div class="box">
                            <div class="bar flex flex-items-center">
                                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/zjazd.png" alt="poziom"></div>
                                <div class="title">Poziom</div>
                            </div>
                            <div class="content">
                                <p>początkujący, średnio-zaawansowani</p>
                            </div>
                        </div>
                          <div class="box">
                            <div class="bar flex flex-items-center">
                                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/lokalizacja.png" alt="lokalizacja"></div>
                                <div class="title">Miejsce</div>
                            </div>
                            <div class="content">
                                <p>JAWORZYNA KRYNICKA - FUNRACE Szkoła narciarska</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="bar flex flex-items-center">
                                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/czas.png" alt="czas"></div>
                                <div class="title">Kiedy</div>
                            </div>
                            <div class="content">
                                <p>Środa - Sobota 9:30 - 13:30</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="bar flex flex-items-center">
                                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/kalendarz.png" alt="terminy"></div>
                                <div class="title">Terminy w sezonie 2017/2018</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>styczeń: 16-20, 23-27, 30.01-3.02</li>
                                    <li>luty: 6-10.02, 13-17.02, 20-24.02,</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- col2-->
                <div class="col col2">
                      <div class="images flex flex-column flex-row-mm flex-justify-around flex-items-center">
                          <div class="new">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/new.png" alt="nowość">
                          </div>
                          <div class="text">Mamucik kurs snowboardowy - szczegóły oferty</div>
                      </div>
                      
 
                      <div class="pils">
                        <div class="tab-wrapper">
  
                          <ul class="tab-menu flex flex-column flex-row-mm">
                            <li class="active">Mamucik kurs snowboardowy</li>
                            <li>Program kursu</li>
                            <li>Dlaczego kurs snowboardowy</li>
                            <li>Cennik</li>
                            <li>Informacje dla rodziców</li>
                          </ul>

                          <div class="tab-content">
                            <div>
                                <p>Kurs snowboardowy to 5 dniowy kursy dla dzieci i młodzieży na każdym poziomie zaawansowania. Program kursu AKADEMII MAMUCIK został starannie dobrany do możliwości uczenia się dzieci. Przy wsparciu i motywacji MAMUCIKA i wykwalifikowanej kadry instruktorskiej nasi uczniowie odkryją wspaniały świat snowboardu – ucząc się i doskonaląc umiejętności techniczne. W trakcie trwania kursu snowboardowego przeznaczamy czas na przerwę i regenerację sił. Na zakończenie szkolenia, na naszych uczniów czeka moc mamucikowych nagród i niespodzianek!</p>
                                <div class="title">
                                    BEZPIECZEŃSTWO I PROFESJONALIZM SZKOLEŃ NARCIARSKICH FUNRACE
                                </div>
                                <p>Szkoła Narciarska FUNRACE jako jedyna szkoła na Jaworzynie posiada licencję SITN PZN, potwierdzającą najwyższe kwalifikacje do prowadzenia szkoleń narciarskich. Szkolenia i kursy snowboardowe dla dzieci realizowane są przez wykwalifikowaną kadrę instruktorów <a href="#">(poznaj naszych instruktorów)</a>.</p>
                            </div>
                            <div>
                                <div class="timelist">
                                    <h3>Dzień I - poniedziałek</h3>
                                    <ul>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">9:30</div>
                                                <div class="desc">Spotkanie z instruktorami przed siedzibą Szkoły FUNRACE, podział na grupy, sprawdzanie sprzętu</div>
                                            </div>
                                        </li>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">9:45</div>
                                                <div class="desc">Wyjście na stok, wyjazd na Jaworzynę. Rozpoczęcie zajęć dla wszystkich grup przy wyciągu "Żółwik", rozgrzewka</div>
                                            </div>
                                        </li>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">10:00 - 11:30</div>
                                                <div class="desc">Szkolenie snowboardowe w grupach cz. I</div>
                                            </div>
                                        </li>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">11:30 - 12:00</div>
                                                <div class="desc">Przerwa</div>
                                            </div>
                                        </li>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">12:00 - 13:30</div>
                                                <div class="desc">Szkolenie snowboardowe w grupach cz. II<br>Odbiór dzieci.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                                 <div class="timelist">
                                    <h3>Dzień II - V</h3>
                                    <ul>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">9:30</div>
                                                <div class="desc">Spotkanie z instruktorami przed siedzibą Szkoły FUNRACE, </div>
                                            </div>
                                        </li>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">9:45 - 11:30</div>
                                                <div class="desc">Szkolenie snowboardowe w grupach cz. I</div>
                                            </div>
                                        </li>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">11:30 - 12:00</div>
                                                <div class="desc">Przerwa</div>
                                            </div>
                                        </li>
                                        <li class="flex">
                                               <div class="ico no-shrink"></div>
                                            <div class="row">
                                                <div class="value">12:00 - 13:30</div>
                                                <div class="desc">Szkolenie snowboardowe w grupach cz. II<br>Odbiór dzieci.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div>
                                <div class="average-list">
                                    <h3>Dlaczego wybrać <span>MAMUCIK KURS SNOWBOARDOWY?</span></h3>
                                    <ul>
                                        <li><span>   16 godz. zajęć na śniegu</span></li>
                                        <li><span>2 godz. opieki i zajęć poza snowboardowych</span></li>
                                        <li><span>25% zniżki na wypożyczenie sprzętu narciarskiego w Wypożyczalni FUNRACE – Centrum Testowym HEAD</span></li>
                                        <li><span>JAKO PIERWSZA szkoła na Jaworzynie Krynickiej umożliwiamy odbiór dzieci przy dolnej stacji wyciągu gondolowego (rodzice nie muszą wjeżdżać na szczyt Jaworzyny)!</span></li>
                                        <li>   program zajęć oraz metody szkolenia dopasowane do możliwości dzieci i młodzieży</li>
                                        <li>zajęcia w grupie rówieśników</li>
                                        <li>nauka w atmosferze zabawy</li>
                                        <li>atrakcyjny program zajęć na śniegu</li>
                                        <li>atrakcje poza narciarskie – Akademia Bezpiecznego Narciarza</li>
                                        <li>doświadczona kadra instruktorska – eksperci w pracy z dziećmi, instruktorzy i trenerzy SITN-PZN</li>
                                        <li>mnóstwo MAMUCIKOWYCH niespodzianek każdego dnia</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                 <div class="average-list">
                                   <div class="cost">
                                       <div class="price">Cena: 669 zł</div>
                                       <p>zniżki: drugie dziecko = 5%, trzecie dziecko = 10%;</p>
                                   </div>
                                    <h3>Cena zawiera:</h3>
                                    <ul>
                                        <li>   25% zniżki na sprzęt narciarski dla uczestników kursu*</li>
                                        <li>      szkolenie narciarskie wg programu</li>
                                        <li>            szkolenia w grupach 3 – 8 os podzielonych wg. wieku i umiejętności.                                     <br>  1 instruktor na grupę</li>
                                        <li>   zajęcia poza narciarskie – Akademia Bezpiecznego Narciarza</li>
                                        <li>                   przerwę na regenerację sił: herbata, drożdżówka</li>
                                        <li>                                        wypożyczenie koszulki identyfikacyjnej na czas trwania kursu</li>
                                        <li>                                        medale, dyplomy, nagrody dla każdego uczestnika</li>
                                    </ul>
                                    <p>* ilość promocyjnych pakietów ograniczon. Promocja wyłącznie dla klientów korzystających z kursów na czas trwania zajęć.</p>
                                      <h3>Cena nie zawiera:</h3>
                                      <ul>
                                        <li>karnetu narciarskiego dla ucznia</li>
                                          <li>wypożyczenia sprzętu</li>
                                    </ul>
                                </div>
                            </div>
                              <div>
                                <div class="average-list">
                                    <h3>Uwagi:</h3>
                                    <ul>
                                        <li>Obowiązkowe posiadanie kasku narciarskiego i karnetu narciarskiego.</li>
                                        <li>Zajęcia odbywają się przy frekwencji minimum 3 osób. Jeśli nie zgłosi się wymagana ilość dzieci, proponujemy zajęcia indywidualne.</li>
                                        <li>W przypadku złych warunków atmosferycznych (deszcz, bardzo silny wiatr itp.) uniemożliwiających przeprowadzenie kursu narciarskiego, zajęcia grupowe zostaną zamienione na lekcję indywidualną o wartości 90 zł. Lekcję indywidualna do wykorzystania w umówionym czasie i terminie do końca sezonu 2016/2017.
                                        <br>Lekcja za nieprzeprowadzony kurs nie podlega wymianie na gotówkę.</li>
                                        <li>W razie wypadku podstawą do zwrotu za niewykorzystany kurs lub opłacone wcześniej lekcje indywidualne jest zaświadczenie lekarskie. Aby otrzymać zwrot, informację o zdarzeniu i anulację lekcji lub kursu należy przekazać osobiście lub telefonicznie do szkoły przed rozpoczęciem zajęć.</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          
                          </div><!-- //tab-content -->

                        </div><!-- //tab-wrapper -->
                        
                      </div>
                      
                      
                      
                </div>
                
            </div>
        </div>
    </div>


<div class="single single2 grid">
    <div class="container padding">
        <div class="content">
            <h3>Inne kursy <span>Mamucik</span></h3>
        </div>
        <!-- wrapper -->
        <div class="wrapper flex flex-justify-center flex-justify-between-ml flex-wrap">
              <a href="<?php echo home_url('zima/oferta/mamucik/mamucik-feryjny'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/mamucik-feryjny.jpg)"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Kurs feryjny</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/mamucik/mamucik-mini'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/mamucik-mini.jpg)"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center"> Kurs mini</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
              <a href="<?php echo home_url('zima/oferta/mamucik/mamucik-swiateczny'); ?>" class="element">
                <div class="inner">
                    <div class="picture" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/mamucik-swiateczny.jpg)"></div>
                    <div class="name">
                        <div class="main flex flex-items-center flex-justify-center">Kurs świąteczny</div>
                        <div class="sticker flex flex-items-center flex-justify-center">
                        Zobacz ofertę
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png" alt="arrow">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- //end. wrapper -->
          <div class="content">
            <h3>Galeria kursów <span>Mamucik</span></h3>
        </div>
        <div class="gallery flex flex-justify-center">
             <div class="wrap flex flex-wrap flex-justify-center">
            <div class="element">
                <div class="inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-01.jpg" alt="mamucik">
                </div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-02.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-03.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-04.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-05.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-06.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-07.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-08.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-09.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-10.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-11.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-12.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-13.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-14.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-15.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-16.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-17.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-18.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-19.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-20.jpg" alt="mamucik"></div>
            </div>
            <div class="element">
                <div class="inner"> <img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-21.jpg" alt="mamucik"></div>
            </div>
              <div class="element">
                <div class="inner"><img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-22.jpg" alt="mamucik"></div>
            </div>
              <div class="element">
                <div class="inner"><img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-23.jpg" alt="mamucik"></div>
            </div>
                 <div class="element">
                <div class="inner"><img src="<?php echo get_template_directory_uri(); ?>/img/mamucik/mamucik-24.jpg" alt="mamucik"></div>
            </div>
            </div>
        </div>
    </div>
     <div class="white-space-40"></div>
</div>




<!--CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!--PARTNERS-->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>