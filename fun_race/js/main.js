$(document).ready(function(){
    
 	//kurczenie menu   
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 500,
            nav = document.querySelector("header > nav");
        if (distanceY > shrinkOn) {
            classie.add(nav,"smaller");
        } else {
            if (classie.has(nav,"smaller")) {
                classie.remove(nav,"smaller");
            }
        }
    });
}
window.onload = init();


    
 //animacja intra   
    
     $('#intro > .intro-poster > .links > a').click(function (e) {
        e.preventDefault();
        $('#intro .circle').css("animation", "puls forwards 2s");
       
     
    var goTo = this.getAttribute("href"); 
     
   setTimeout(function(){
        window.location = goTo;
    },1000);
});    
    
//hamburger

     
   $(".hamburger").click(function(){
        $(".hamburger .inner").toggleClass("open");
        $("nav > .menu > ul").toggleClass("closed");
    });

     $(".actual .container .main .wrapper .element").click(function(){
        $(this).addClass("move");
     });
      $(".actual .container .main .wrapper .element").mouseleave(function(){
        $(this).removeClass("move");
     });
   
    
//PARALLAX
    
    $(window).bind('scroll',function(e){
   		parallaxScroll();
   	}); 
  	function parallaxScroll(){
   		var scrolledY = $(window).scrollTop();
		$('.poster-sub .cover').css('background-position','center +'+((scrolledY*0.5))+'px');
        $('.poster .cover').css('background-position','center +'+((scrolledY*0.5))+'px');
   	}

 //PARALAX TEXT
/*    $(window).scroll(function () {
            $('.poster-sub > .content').css({
                'transform': 'translateY(' - h/2 + '%)'
            });
        });
    */
//przypinanie social media
    
$(function(){
	(function( panel ){
		var visible = false;
		var posY = function(){
			var body = $( 'body' ).prop( 'scrollTop' );
			var html = $( 'html' ).prop( 'scrollTop' );
			
			return html === 0?( body ):( html );
			
		};
		var clone = panel
		.clone( true )
		.appendTo( panel.parent() )
		.hide()
		.css({
			position: 'fixed',
			top: 0,
			right: 0,
			transition: 'all .3s',
			
		});
		
		
		panel
		.on({
			show: function( e ){
				clone.show();
				visible = true;
				
			},
			hide: function( e ){
				clone.hide();
				visible = false;
				
			},
			check: function( e ){
				if( posY() > panel.offset().top && !visible && window.innerWidth >= 1440 ){
					panel.triggerHandler( 'show' );
					
				}
				else if( posY() <= panel.offset().top && visible ){
					panel.triggerHandler( 'hide' );
					
                
				}	
			},
			
		});
		
		$( window ).scroll( function(){
			panel.triggerHandler( 'check' );
			
		} );
		
		$( window ).resize(function(){
			if( window.innerWidth < 1440 && visible ){
				panel.triggerHandler( 'hide' );
				
			}
			
		});
		
        
        $(document).scroll(function() {
            checkOffset();
        });
        function checkOffset() {
            if($('.breadcrumbs .social').offset().top + $('.breadcrumbs .social').height() >= $('.newsletter').offset().top - 10)
        $('.breadcrumbs .social').css('display', 'absolute');
        }
        
        
        
	})
	( $( '.breadcrumbs .social' ) );
	
});


// Pojawianie sie paska rezerwuj i sezon

	$(window).scroll(function(){
		if( window.innerWidth < 1440){
			if ($(this).scrollTop() > 300) {
				$('.nav-end').fadeIn().css('display', 'flex');
			} else {
				$('.nav-end').fadeOut();
			}
		}
	});

//PILS TAB
    
   var $wrapper = $('.tab-wrapper'),
      $allTabs = $wrapper.find('.tab-content > div'),
      $tabMenu = $wrapper.find('.tab-menu li'),
      $line = $('<div class="line"></div>').appendTo($tabMenu);
  
      $allTabs.not(':first-of-type').hide();  
      $tabMenu.filter(':first-of-type').find(':first').width('100%')

      $tabMenu.each(function(i) {
        $(this).attr('data-tab', 'tab'+i);
      });

      $allTabs.each(function(i) {
        $(this).attr('data-tab', 'tab'+i);
      });

      $tabMenu.on('click', function() {

        var dataTab = $(this).data('tab'),
            $getWrapper = $(this).closest($wrapper);

        $getWrapper.find($tabMenu).removeClass('active');
        $(this).addClass('active');

        $getWrapper.find('.line').width(0);
        $(this).find($line).animate({'width':'100%'}, 'fast');
        $getWrapper.find($allTabs).hide();
        $getWrapper.find($allTabs).filter('[data-tab='+dataTab+']').show();
  });

    //SLIDER MAIN
            
          $(function () {
            mainSlider();
        });
    
      function mainSlider() {
            var size = $("#slider-main > .slide").length; //number of items in carousel
            var position = 0; // current position of carousal
            var sliderIntervalID; // used to clear autoplay
            var sliderInterval = 4000; // interval of autoplay
            var changeInterval = 1000; // interval between change of slides

            $("#slider-main > .slide").not(".show").fadeOut(); //fadeout all items except the one with .show

            startSlider(); //starts autoplay

            // function to start auto play
            function startSlider() {
                sliderIntervalID = setInterval(function () {
                    run(1);
                }, sliderInterval);
            }

            // on mouseover stop the autoplay
            $("#slider-main").mouseover(function () {
                clearInterval(sliderIntervalID);
            });
            // on mouseout starts the autoplay
            $("#slider-main").mouseout(function () {
                startSlider();
            });

            //on right clicking the carousal
            $("#slider-main > .next").click(function () {
                run(1);
            });


            //on left button click of the carousal
            $("#slider-main > .prev").click(function () {
                run(0);
            });


            //moves the slider back or forth based on x (1 = forward 0 = backward)
            function run(x) {
                position = $("#slider-main").find(".show").index();
                if (x == 1)
                    ++position;
                else
                    --position;
                checker();
                changeCarousal(); //function call that actually changes slides
            }


            //just a function to reposition the slider when out of bounds
            function checker() {
                if (position >= size) {
                    position = 0;
                }
                else if (position < 0) {
                    position = size - 1;
                }
                //console.log(position);
            };


            //this changes the image and button selection
            function changeCarousal() {
                $("#slider-main").find(".show").removeClass("show").fadeOut();
                $("#slider-main > .slide").eq(position).fadeIn(changeInterval).addClass("show");
                $("#slider-main > .labels").find(".active").removeClass("active");
                $("#slider-main > .labels > .label").eq(position).addClass("active");
            }

            //when use clicks slider button
            $("#slider-main > .labels > .label").click(function () {
                position = $(this).index();
                var temp = $("#slider-main").find(".show").index();
                if (position != temp) {
                    changeCarousal();
                }
            });
        }
    
    
    //SLIDER HOTEL
    
    function SliderHotel(){
    var controls = document.querySelectorAll('.hotel-slider .buttons > .btn');
    var slides = document.querySelectorAll('.hotel-slider > .slides > .cover');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide,5000);

    function nextSlide(){
        goToSlide(currentSlide+1);
    }

    function previousSlide(){
        goToSlide(currentSlide-1);
    }

    function goToSlide(n){
        slides[currentSlide].className = '.hotel-slider cover';
        currentSlide = (n+slides.length)%slides.length;
        slides[currentSlide].className = '.hotel-slider cover showing';
    }


    var playing = true;
    var pauseButton = document.querySelector('.hotel-slider .buttons > .pause');

    function pauseSlideshow(){
       pauseButton.style.background="rgba(6,154,12,.4)";
        playing = false;
        clearInterval(slideInterval);
    }

    function playSlideshow(){
        pauseButton.style.background="rgba(0,0,0,.7)";
        playing = true;
        slideInterval = setInterval(nextSlide,5000);
    }

    pauseButton.onclick = function(){
        if(playing){ pauseSlideshow(); }
        else{ playSlideshow(); }
    };

    var next = document.querySelector('.hotel-slider .buttons .next');
    var previous = document.querySelector('.hotel-slider .buttons .prev');

    next.onclick = function(){
        pauseSlideshow();
        nextSlide();
    };
    previous.onclick = function(){
        pauseSlideshow();
        previousSlide();
    };
  }
  SliderHotel();

    
 //SLIDER GŁOWNA 
   			/* slider główny */

    

    
    
    
    
     

});