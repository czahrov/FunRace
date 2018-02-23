<?php
	get_header();

	/*
	Template Name: lato rezerwuj-kajakarstwo
	*/
?>
<body class="lato" id="rezerwuj-kajakarstwo">
 <header>
    <?php get_template_part("template/menu-lato"); ?>	
    
	<div class="poster-sub poster-sub-rezerwuj poster-sub-rezerwuj-single flex flex-justify-center flex-items-center">
		<div class="cover"></div>
        <?php banner(); ?>

	</div>
		<div class="nav-act">
		<div class="grid">
		    <div class="container">
		        <div class="bar flex flex-column flex-row-mm">
		            <div class="select select-single">
		                <div class="select-head flex flex-items-center flex-justify-center flex-justify-start-mm">
		                    <div class="title">Szkoła kajakarstwa górskiego</div>
		                    <div class="icon">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png" alt="arrow">
		                    </div>
		                </div>
		                 <div class="select-options">
		                    <div class="option flex-justify-center flex-justify-start-mm">SZKOLENIA INDYWIDUALNE</div>
		                    <div class="option flex-justify-center flex-justify-start-mm">FUN WATER CAMP</div>   <div class="option flex-justify-center flex-justify-start-mm">CANOE CAMP</div>
		                       <div class="option flex-justify-center flex-justify-start-mm">Spływ kajakowy - zakopane</div>
		                </div>
		                
		                
		                
		                
		            </div>
		      	   <div class="select anti-select">
		                <div class="select-head flex flex-items-center flex-justify-center flex-justify-start-mm">
		                    <div class="title">wybrana trasa: </div>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
		</div>
 </header>
 
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>
	
<!-- REZERWUJ-SINGLE -->

<div class="rezerwuj-single">
    <div class="grid">
        <div class="container padding">
           <div class="wrapper flex flex-column flex-row-dm flex-justify-between flex-items-start">
               <div class="levels">
                   <div class="title flex flex-items-center">
                       Poziom uczestnika
                   </div>
                   <div class="bar flex flex-items-center">Początkujący</div>
                   <div class="descript">Sed nec massa in dolor aliquet bibendum</div>
                   <div class="bar flex flex-items-center">Średnio-zaawansowany</div>
                   <div class="descript">Nam hendrerit, sem id volutpat fringilla, arcu eros gravida ante, quis volutpat est est a leo. Phasellus rhoncus eget turpis id pretium. </div>
                   <div class="bar flex flex-items-center">Zaawansowany</div>
                   <div class="descript">Suspendisse rhoncus augue at lobortis scelerisque. Sed in neque volutpat, iaculis quam sed, rutrum tortor.</div>
               </div>
               <div class="details">
                   <div class="row row1 flex flex-column flex-row-mm flex-justify-between">
                       <div class="label flex flex-items-center">
                           <div class="inner">
                               <div class="title">Dane osobowe</div>
                               <div class="person">rezerwującego</div>
                           </div>
                       </div>
                       <div class="personal personal-parent">
                           <form action="" class="flex flex-wrap">
                               <div class="item flex flex-column base1 base2-mm">
                                   <label for="parent-name">Imię</label>
                                   <input type="text" id="parent-name" name="parent-name">
                               </div>
                               <div class="item flex flex-column base1 base2-mm">
                                   <label for="parent-surname">Nazwisko</label>
                                   <input type="text" if="parent-surname" name="parent-surname">
                               </div>
                               <div class="item flex flex-column base1 base2-mm">
                                   <label for="parent-tel">Tel. Kontaktowy</label>
                                   <input type="tel" id="parent-tel" name="parent-tel" value="+48 501 724 216" class="valid">
                               </div>
                               <div class="item flex flex-column base1 base2-mm">
                                    <label for="parent-email">Adres e-mail</label>
                                   <input type="email" name="parent-email" id="parent-email">
                               </div>
                           </form>                       
                       </div>
                   </div>
                   <div class="row row1 flex flex-column flex-row-mm flex-justify-between">
                         <div class="label flex flex-items-center">
                           <div class="inner">
                               <div class="title">Dane osobowe</div>
                               <div class="person">uczestnika</div>
                           </div>
                       </div>
                        <div class="personal personal-parent">
                           <form action="" class="flex flex-wrap">
                               <div class="item flex flex-column base1 base2-mm">
                                   <label for="party-name">Imię</label>
                                   <input type="text" id="party-name" name="party-name">
                               </div>
                               <div class="item flex flex-column base1 base2-mm">
                                   <label for="party-surname">Nazwisko</label>
                                   <input type="text" if="party-surname" name="party-surname">
                               </div>
                  
                                 <div class="item flex flex-column base1 base2-mm">
                                    <label for="party-level">Godzina spływu</label>
                                   <div class="lev" name="party-level" id="party-level">
                                       <div class="lev-header flex flex-items-center flex-justify-between">
                                           <div class="text">wybierz</div>
                                           <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                       </div>
                                       <div class="options flex flex-column">
                                           <div class="option flex flex-items-center">9:00</div>
                                           <div class="option flex flex-items-center">13:00</div>
                                           <div class="option flex flex-items-center">15:00</div>
                                       </div>
                                   </div>
                               </div>
                              
                              
                              
                              
                               <div class="item flex flex-column base1 base2-mm">
                                    <label for="party-level">Poziom uczestnika</label>
                                   <div class="lev" name="party-level" id="party-level">
                                       <div class="lev-header flex flex-items-center flex-justify-between">
                                           <div class="text">Wybierz poziom</div>
                                           <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                       </div>
                                       <div class="options flex flex-column">
                                           <div class="option flex flex-items-center">początkujący</div>
                                           <div class="option flex flex-items-center">średnio-zaawansowany</div>
                                           <div class="option flex flex-items-center">zaawansowany</div>
                                       </div>
                                   </div>
                               </div>
                                <div class="term flex flex-column flex-items-center">
                                   <p>Data kursu</p>
                                   <div class="date flex flex-justify-center flex-items-center">24 lipca</div>
                               </div>
                                <div class="term flex flex-column flex-items-center">
                                   <p>Godzina rozpoczęcia</p>
                                   <div class="date flex flex-justify-center flex-items-center">11:00</div>
                               </div>
                                <div class="radio-row">
                                   <input type="radio" name="age" id="adult" value="Dorosły">
                                  <label for="adult">Dorosły</label>

                                 <input type="radio" name="age" id="child" value="Dziecko">
                                  <label for="child">Dziecko</label>
 
                                </div>
                               <div class="area flex flex-column">
                                   <label for="additional">Dodatkowy opis posiadanych umiejętności</label>
                                   <textarea name="additional" id="additional"></textarea>
                               </div>
                               <div class="check-row flex">
                                    <input type="checkbox" id="stuff" name="stuff">
                                    <label for="stuff">Czy szkolona osoba będzie korzystać z promocyjnego pakietu sprzętu z wypożyczalni FUN&amp;RACE?</label>
                                </div>
                                <div class="buttons flex flex-wrap">
                                    <button class="add flex flex-justify-center flex-items-center">
                                        <p>Dodaj sprzęt</p>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="sizes flex">
                                    <div class="element flex flex-column base3">
                                        <label for="foot">długość stopy</label>
                                        <div class="box">
                                            <div class="box-head flex flex-items-center">
                                                <p>(cm)</p>
                                                <span class="angle"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="options">
                                                <div class="option">25-26</div>
                                                <div class="option">27-28</div>
                                                <div class="option">29-30</div>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="element flex flex-column base3">
                                        <label for="foot">wzrost </label>
                                        <div class="box">
                                            <div class="box-head flex flex-items-center">
                                                <p>(cm)</p>
                                                <span class="angle"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="options">
                                                <div class="option">125-130</div>
                                                <div class="option">131-138</div>
                                                <div class="option">139-145</div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="element flex flex-column base3">
                                        <label for="foot">waga </label>
                                        <div class="box">
                                            <div class="box-head flex flex-items-center">
                                                <p>(kg)</p>
                                                <span class="angle"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="options">
                                                <div class="option">>30</div>
                                                <div class="option">30-34</div>
                                                <div class="option">35-39</div>
                                                <div class="option">40-44</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="check-row check2 flex">
                                    <input type="checkbox" id="statute" name="statute">
                                    <label for="statute">Akceptuję regulamin</label>
                                    <a href="#">regulamin</a>
                                </div>
                                  <div class="check-row check2 flex">
                                    <input type="checkbox" id="privacy" name="privacy">
                                    <label for="privacy">Akceptuję politykę prywatności FunRace</label>
                                    <a href="#">polityka prywatności</a>
                                </div>
                                <div class="check-row check2 flex">
                                    <input type="checkbox" id="statement" name="statement">
                                    <label for="statement">Oświadczam, iż stan zdrowia mojego dziecka pozwala na udział w zajęciach Akademii Narciarskiej Mamucik</label>
                                </div>
                                <div class="buttons flex flex-wrap">
                                    <button class="send flex flex-justify-center flex-items-center">wyślij zgłoszenie</button>
                                    <button class="add flex flex-justify-center flex-items-center">
                                        <p>Dodaj uczestnika</p>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                           </form>  
                           
                                                
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