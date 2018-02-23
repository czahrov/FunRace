<?php
	get_header();

	/*
	Template Name: lato oferta
	*/
?>
<body class="lato" id="oferta">
 <header>
     <?php get_template_part("template/menu-lato"); ?>	
	<?php banner(); ?>
 </header>
 
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
    
<!-- OFFER -->
<div class="offer grid">
    <div class="container">
        <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/rafting'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Rafting</h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>Rafting to spływ specjalistycznym pontonem przeznaczonym do raftingu górskiego, spienionym nurtem górskiej rzeki. W trakcie trwania takiego spływu, każdy uczestnik wyposażony jest w kamizelkę asekuracyjną, kask oraz wiosło. Każdorazowo na pontonie płynie ratownik lub instruktor kajakarstwa, który steruje pontonem oraz dba o bezpieczeństwo uczestników spływu. <br> <br>
                Rafting na Dunajcu lub rzece Poprad to przygoda, świetna zabawa z dawką adrenaliny. Malownicze okolice, piękne widoki oraz nurt górskiej rzeki, pozostaną na długo w pamięci uczestników. Atrakcje polecamy zarówno dla klientów indywidualnych, grup zorganizowanych jako element imprez integracyjnych jak również dla rodzin i osób lubiących aktywny wypoczynek.</p>
            </div>
        </div>
         <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/splywy-kajakowe'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Spływy kajakowe<span class="block">na Dunajcu</span></h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>Spływy kajakowe to kolejna opcja eksplorowania Dunajca. Spływy kajakowe to idealna propozycja dla osób chcących połączyć aktywny wypoczynek z dawką adrenaliny z możliwością podziwiania krajobrazu pienińskiej przyrody, który zmienia się tu jak w filmie. Możemy oglądać na przemian urwiska skalne dochodzące do 300 m wysokości oraz lesiste zbocza górskie. Istnieje możliwość zorganizowania spływu kajakowego pod okiem instruktorów kajakarstwa górskiego, Mistrzów Polski w kajakarstwie górskim.
                </p>
            </div>
        </div>
         <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/wypozyczalnia-kajakow'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Wypożyczalnia kajaków <span class="block">na Dunajcu</span></h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>WYPOŻYCZALNIA KAJAKÓW NA DUNAJCU<br><br>

                Wypożyczalnia kajaków FUN&amp; to największa wypożyczalnia w Szczawnicy. W swoim asortymencie posiadamy: kajaki turystyczne, kajaki sportowe, wyposażenie: wiosła, kaski, kamizelki asekuracyjne, fartuchy kajakowe, akcesoria wodoszczelne: pojemniki i worki.<br>
                Używany przez nas sprzęt posiada niezbędne atesty i certyfikaty.
                </p>
            </div>
        </div>
        
         <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/szkola-kajakarstwa-gorskiego'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Szkoła<span class="block">kajakarstwa górskiego</span></h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>Powstała jako kontynuacja sportowej pasji i zawodniczej kariery. Z bagażem wieloletnich doświadczeń, umiejętnościami technicznymi i metodycznymi wychodzimy naprzeciw oczekiwaniom tych z Państwa, którzy pragną zasmakować sportowych zmagań z chłodem górskiej wody i siłą własnych mięśni. Organizujmy kursy kajakarstwa górskiego na każdym poziomie zaawansowania.
                </p>
            </div>
        </div>
        
          <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/imprezy-integracyjne'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Imperzy<span class="block">integracyjne</span></h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>Nie posiadamy gotowych projektów do realizacji, bo najważniejsze dla nas jest indywidualne podejście do klienta. Zdradzimy, że imprezy integracyjne organizowane przez FUN&amp;RACE Event to niepowtarzalne chwile dobrej zabawy z dawką adrenaliny, to różnorodność propozycji, to profesjonalna obsługa i 100% bezpieczeństwa, to dbałość o najdrobniejsze szczegóły bo ten dzień musi być idealny… szkoda każdej chwili.
                </p>
            </div>
        </div>
        
          <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/rowery'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Rowery</h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>Połączenie wycieczki rowerowej i raftingu lub spływu kajakowego to opcja przygotowana z myślą o tych, którzy pragną aktywnie spędzić wolny czas. Uczestnicy po wyposażeniu w kompletny sprzęt: rower, kask, wyruszają z przewodnikiem spod Palenicy (Szczawnica), malowniczą ścieżką rowerową, prowadzącą przez Pieniński Park Narodowy do Sromowiec Niżnych – naszej bazy pontonowo-kajakowej. Uczestnicy będą mogli podziwiać, oprócz przepięknej scenerii Przełomu Dunajca również kolejną atrakcję tego regionu – Czerwony Klasztor.</p>
            </div>
        </div>
        
          <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/oferta-dla-szkol'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Oferta<span class="block">dla szkół</span></h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>
                    Specjalizujemy się w przygotowywaniu indywidualnych ofert dla szkół, grup szkolnych, wycieczek, kolonii, zielonych szkół. Tworzymy programy oparte o ruch – aktywny wypoczynek, integrację rówieśników oraz poznawanie uroków pienińskiej przyrody. Najważniejszym założeniem, którym kierujemy się przy opracowywaniu ofert jest bezpieczeństwo – ma być ciekawie, aktywnie ale zawsze bezpiecznie. Zapewniamy je uczestnikom zajęć dzięki pracy doświadczonych instruktorów, przewodników oraz przez korzystanie z własnego atestowanego sprzętu. Jesteśmy pedagogami z wieloletnim doświadczeniem w pracy z dziećmi i młodzieżą. Dlatego z pełnym zaufaniem można powierzyć nam realizację takiego przedsięwzięcia.
                </p>
            </div>
        </div>
        
          <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/off-road'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Off-Road</h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
            </div>
        </div>
        
          <div class="row flex flex-column flex-row-ml">
            <a href="<?php echo home_url('lato/oferta/park-linowy'); ?>" class="destiny base1 base2-ml">
                <div class="cover"></div>
                 <h3>Park linowy</h3>
                 <div class="link flex">
                    <div class="text">Czytaj więcej</div>
                    <div class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" alt="arrow"></div>
                </div>
            </a>
            
            <div class="description base1 base2-ml">
                <p>
                </p>
            </div>
        </div>
        
    </div>
	<div style="padding-bottom: 90px;"></div>
</div>


<!--CONTACT BAR-->
<?php get_template_part("template/contact-bar-lato"); ?>
<!--PARTNERS-->
<?php get_template_part("template/partners"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>