<?php
	get_header();
	/*
	Template Name: lato wypozyczalnia kajakow
	*/
?>
<body id="wypozyczalnia-kajakow" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
    <?php get_template_part("template/menu"); ?>	
	<?php banner(); ?>
 </header>

     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<div class="wypozyczalnia">
    <div class="grid">
        <div class="container padding">
            <div class="intro flex flex-column flex-row-ml">
                <div class="box content base1 base2-ml">
                    <h2>WYPOŻYCZALNIA KAJAKÓW
                    <span class="block big">NA DUNAJCU</span></h2>
                    <div class="white-space-40"></div>
                    <p><span class="bold">  Wypożyczalnia kajaków FUN&amp;RACE</span> 
                    to największa wypożyczalnia w Szczawnicy. W swoim asortymencie posiadamy: kajaki turystyczne, kajaki sportowe, wyposażenie: wiosła, kaski, kamizelki asekuracyjne, fartuchy kajakowe, akcesoria wodoszczelne: pojemniki i worki.
                    <br>
                    Używany przez nas sprzęt posiada niezbędne atesty i certyfikaty.


                    </p>
                    <div class="white-space-40"></div>
                    <div class="simple-list"> 
                        <h3> Do dyspozycji przygotowaliśmy sprzęt:</h3>
                        <ul>
                            <li>kajaki</li>
                            <li>akcesoria spływowe</li>
                            <li>pontony</li>
                        </ul>
                          <div class="white-space-40"></div>
                    </div>
                </div>
                <div class="box base1 base2-ml flex flex-justify-end">
                    <div class="pic" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/lato/wypozyczalnia-kajakow.jpg)">
                    <a href="<?php echo home_url('lato/oferta'); ?>" class="filter flex flex-items-center flex-justify-center">
                        <h3>FUN&amp;RACE <br> Oferta letnia 2017</h3>
                    </a>
                    </div>
                </div>
            </div>
            
<!-- TABLE KAJAKI -->
        <div class="table-kajak">
            <!-- KOMPLET -->
            <div class="th flex flex-items-center flex-justify-center">Kajaki</div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/Aquarius-Traper.jpg" alt="Aquarius-Traper.">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>           AQUARIUS TRAPER – kajaki jednoosobowe. Stabilne, łatwe w sterowaniu, polietylenowe jednostki dla początkujących i średniozaawansowanych kajakarzy. Dzięki swojej konstrukcji i wykończeniu są bardziej odporne na uszkodzenia od kajaków pneumatycznych.</p>
                    </div>
                </div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/Aquarius-Tramp.png" alt="Aquarius-Tramp.">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>AQUARIUS TRAMP – dwu-kokpitowe kajaki turystyczny, które jak twierdzą nasi klienci ” są nie do wywrócenia, nawet na górskiej rzece”. Aquarius tramp to idealna propozycja dla początkujących i średniozaawansowanych kajakarzy jak również na rodzinne spływy kajakowe.</p>
                    </div>
                </div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/Aquarius-Pro-Tour.jpg" alt="Aquarius-Pro-Tour.">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>AQUARIUS PRO TOUR – otwarto kokpitowy kajak turystyczny z miejscem dla dziecka. Bezpieczna, mocna i niezatapialna konstrukcja doskonale sprawdza się na rzekach górskich. Bardzo wygodne profilowane fotele ze składanym oparciem pełniące również rolę wypornościową. Aquarius pro tour to idealna propozycja dla początkujących i średniozaawansowanych kajakarzy jak również na rodzinne spływy kajakowe.</p>
                    </div>
                </div>
               
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/Prion-Cross-Club.jpg" alt="Prion-Cross-Club">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>PRIJON CROSS – wszechstronne kajaki, z płaskim i „zwinnym dnem”, błyskawicznie reagują na manewry wiosłem. Duża wyporność sprawia, że zdają egzamin zarówno na falach jak i spokojnym odcinku rzeki. Polecamy średniozaawansowanym i zaawansowanym kajakarzom. Idealna propozycja dla klientów, którzy chcą spróbować swoich sił w kajaku sportowym jak również dla potrzeb szkoleń i kursów.</p>
                    </div>
                </div>
            <!--END//-->
        </div>
    <!--END TABLE//-->
    
    <!-- TABLE AKCESORIA -->
        <div class="table-kajak">
            <!-- KOMPLET -->
            <div class="th flex flex-items-center flex-justify-center">Akcesoria</div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/Wiosło-kajakowe.png" alt="Wiosło-kajakowe">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>WIOSŁA – Turystyczne wiosło, sztywne, twarde pióro wykonane z fibrylonu – połączenia polietylenu i włókna szklanego, świetnie nadaje się do odpychania gdy pokonujemy liczne przeszkody. W miejscach gdzie chwytamy drążek podczas wiosłowania znajduje się antypoślizgowa folia.</p>
                    </div>
                </div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/fartuch_kajakowy_aquarius.png" alt="fartuch_kajakowy_aquarius">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>FARTUCH KAJAKOWY AQUARIUS PRO – Fartuch posiada regulowane szelki, dużą kieszeń z siatki zamykaną na zamek błyskawiczny. Komin i obwód fartucha (wszyta guma) jest regulowany,dzięki czemu fartuch jest uniwersalny.  Na przodzie fartucha znajduje się gumowa rączka,która ułatwia chwyt i natychmiastowe zerwanie fartucha z kokpitu w razie wywrotki.  Fartuch posiada odblaskowe wstawki, dzięki czemu kajakarz dla innych jest bardziej widoczny w czasie gorszej pogody.</p>
                    </div>
                </div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/Pojemnik-wodoszczelny.jpg" alt="Pojemnik-wodoszczelny">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>WORKI i POJEMNIKI WODOSZCZELNE </p>
                    </div>
                </div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/kask.jpg" alt="kask">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>KASKI DO SPORTÓW WODNYCH </p>
                    </div>
                </div>
                   <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/kamizelka.jpg" alt="kamizelka">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>KAMIZELKI ASEKURACYJNE </p>
                    </div>
                </div>
                
            <!--END//-->
        </div>
    <!--END TABLE//-->

      <!-- TABLE PONTONY -->
        <div class="table-kajak">
            <!-- KOMPLET -->
            <div class="th flex flex-items-center flex-justify-center">WYPOŻYCZALNIA PONTONÓW RAFTINGOWYCH</div>
                <div class="row flex flex-column flex-row-ml">
                    <div class="img base3 no-shrink flex flex-items-center flex-justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lato/kajaki/ponton.jpg" alt="ponton">
                    </div>
                    <div class="desc flex flex-items-center flex-justify-center">
                    <p>PONTONY WATS model RAF360 (7osobowe), Osprzęt: wiosła, kamizelki ratunkowe, kaski</p>
                    </div>
                </div>
                
            <!--END//-->
        </div>
    <!--END TABLE//-->


        <div class="white-space-100"></div>
        
        <div class="help flex flex-wrap flex-nowrap-ds flex-justify-center">
            <div class="box base1 base3-ds text-center text-left-ds">
                <h3>Potrzebujesz pomocy?
               <span>Informacja</span>
                </h3>
                <ul>
                    <li>Kamil Zaród</li>
                    <li><span class="bold">kom: +48 609 375 913</span></li>
                    <li>biuro@funrace.pl</li>
                </ul>
            </div>
                <div class="box base1 base3-ds text-center text-left-ds">
                <h3>
                Zarezerwuj sprzęt
                <span>Rezerwacja</span>
                </h3>
                <ul>
                    <li>Kamil Zaród</li>
                    <li><span class="bold">kom: +48 609 375 913</span></li>
                    <li>biuro@funrace.pl</li>
                </ul>
            </div>
                         <div class="box base1 base3-ds text-center text-left-ds">
                <h3>Lokalizacja
                <span>wypożyczalni</span>
                </h3>
                <ul>
                    <li><span class="bold">Wypożyczalnia FUNRACE</span></li>
                    <li>Szczawnica, Krościenko n/Dunajcem – spływy kajakowe na Dunajcu</li>
                    <li>Piwniczna Zdrój – spływy kajakowe na rzece Poprad</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>


<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>