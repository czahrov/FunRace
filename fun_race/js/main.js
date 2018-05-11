$(function () {

	//kurczenie menu
	function init() {
		if( $( 'header > nav' ).length < 1 ) return false;
		
		window.addEventListener('scroll', function (e) {
			var distanceY = window.pageYOffset || document.documentElement.scrollTop,
			shrinkOn = 500,
			nav = document.querySelector("header > nav");
			if (distanceY > shrinkOn) {
				classie.add(nav, "smaller");
			} else {
				if (classie.has(nav, "smaller")) {
					classie.remove(nav, "smaller");
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

		setTimeout(function () {
			window.location = goTo;
		}, 1000);
	});

	//hamburger
	$(".hamburger").click(function () {
		$(".hamburger .inner").toggleClass("open");
		$("nav > .menu > ul").toggleClass("closed");
	});

	$(".actual .container .main .wrapper .element").click(function () {
		$(this).addClass("move");
	});
	$(".actual .container .main .wrapper .element").mouseleave(function () {
		$(this).removeClass("move");
	});

	//PARALLAX
	$(window).bind('scroll', function (e) {
		parallaxScroll();
	});
	function parallaxScroll() {
		var scrolledY = $(window).scrollTop();
		$('.poster-sub .cover').css('background-position', 'center +' + ((scrolledY * 0.5)) + 'px');
		$('.poster .cover').css('background-position', 'center +' + ((scrolledY * 0.5)) + 'px');
	}

	//PARALAX TEXT
	/*    $(window).scroll(function () {
	$('.poster-sub > .content').css({
	'transform': 'translateY(' - h/2 + '%)'
	});
	});
	 */
	//przypinanie social media

	(function (panel) {
		var visible = false;
		var posY = function () {
			var body = $('body').prop('scrollTop');
			var html = $('html').prop('scrollTop');

			return html === 0 ? (body) : (html);

		};
		var clone = panel
			.clone(true)
			.appendTo(panel.parent())
			.hide()
			.css({
				position: 'fixed',
				top: 0,
				right: 0,
				transition: 'all .3s',

			});

		panel
		.on({
			show: function (e) {
				clone.show();
				visible = true;

			},
			hide: function (e) {
				clone.hide();
				visible = false;

			},
			check: function (e) {
				if (posY() > panel.offset().top && !visible && window.innerWidth >= 1440) {
					panel.triggerHandler('show');

				} else if (posY() <= panel.offset().top && visible) {
					panel.triggerHandler('hide');

				}
			},

		});

		$(window).scroll(function () {
			panel.triggerHandler('check');

		});

		$(window).resize(function () {
			if (window.innerWidth < 1440 && visible) {
				panel.triggerHandler('hide');

			}

		});

		$(document).scroll(function () {
			// checkOffset();
		});
		function checkOffset() {
			if ($('.breadcrumbs .social').offset().top + $('.breadcrumbs .social').height() >= $('.newsletter').offset().top - 10)
				$('.breadcrumbs .social').css('display', 'absolute');
		}

	})
	($('.breadcrumbs .social'));

	// Pojawianie sie paska rezerwuj i sezon
	$(window).scroll(function () {
		if (window.innerWidth < 1440) {
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

	$tabMenu.each(function (i) {
		$(this).attr('data-tab', 'tab' + i);
	});

	$allTabs.each(function (i) {
		$(this).attr('data-tab', 'tab' + i);
	});

	$tabMenu.on('click', function () {

		var dataTab = $(this).data('tab'),
		$getWrapper = $(this).closest($wrapper);

		$getWrapper.find($tabMenu).removeClass('active');
		$(this).addClass('active');

		$getWrapper.find('.line').width(0);
		$(this).find($line).animate({
			'width': '100%'
		}, 'fast');
		$getWrapper.find($allTabs).hide();
		$getWrapper.find($allTabs).filter('[data-tab=' + dataTab + ']').show();
	});

	//SLIDER MAIN
	(function( slider, items, pagin ){
		var current = 0;
		var delay = 4000;
		var duration = 1000;
		var lock = false;
		var autoplay = true;
		var itrv;
		
		slider
		.on({
			init: function( e ){
				TweenLite.set(
					items.eq( 0 ),
					{
						opacity: 1,
						zIndex: 1,
						
					}
				);
				
				TweenLite.set(
					items.eq( 0 ).siblings( '.slide' ),
					{
						opacity: 0,
						zIndex: 0,
						
					}
				);
				
				$(this).triggerHandler( 'start' );
				
			},
			next: function( e ){
				if( !lock ){
					// console.log( 'next' );
					lock = true;
					current++;
					$(this).triggerHandler( 'set' );
					
				}
				
			},
			prev: function( e ){
				if( !lock ){
					// console.log( 'prev' );
					lock = true;
					current--;
					$(this).triggerHandler( 'set' );
					
				}
				
			},
			set: function( e ){
				// console.log( 'set' );
				var self = $(this);
				if( current < 0 ) current = items.length - 1;
				current %= items.length;
				
				pagin
				.eq( current )
				.addClass( 'active' )
				.siblings( '.item' )
				.removeClass( 'active' );
				
				new TimelineLite({
					onComplete: function(){
						lock = false;
						
					},
					
				})
				.add(
					TweenLite.to(
						items.eq( current ).siblings( '.slide' ),
						duration / 1000,
						{
							opacity: 0,
							zIndex: 0,
						}
					),
					0
				)
				.add(
					TweenLite.to(
						items.eq( current ),
						duration / 1000,
						{
							opacity: 1,
							zIndex: 1,
						}
					),
					0
				)
				
			},
			stop: function( e ){
				window.clearInterval( itrv );
				
			},
			start: function( e ){
				if( !autoplay ) return false;
				var self = $(this);
				
				self.triggerHandler( 'stop' );
				itrv = window.setInterval( function(){
					self.triggerHandler( 'next' );
					
				}, delay );
				
			},
			mouseover: function( e ){
				$(this).triggerHandler( 'stop' );
				
			},
			mouseleave: function( e ){
				$(this).triggerHandler( 'start' );
				
			},
			
		})
		.swipe({
			swipeLeft: function( e ){
				$(this).triggerHandler( 'next' );
				
			},
			swipeRight: function( e ){
				$(this).triggerHandler( 'prev' );
				
			},
			
		});
		
		pagin.click( function( e ){
			if( !lock ){
				lock = true;
				current = $(this).index();
				slider.triggerHandler( 'set' );
				
			}
			
		} );
		
		slider.triggerHandler( 'init' );
		
	})
	(
		$( '#slider-main' ),
		$( '#slider-main > .slide' ),
		$( '#slider-main > .pagin > .item' )
	);
	
	//SLIDER HOTEL
	function SliderHotel() {
		if ($('.hotel-slider').length == 0)
			return false;
		var controls = document.querySelectorAll('.hotel-slider .buttons > .btn');
		var slides = document.querySelectorAll('.hotel-slider > .slides > .cover');
		var currentSlide = 0;
		var slideInterval = setInterval(nextSlide, 5000);

		function nextSlide() {
			goToSlide(currentSlide + 1);
		}

		function previousSlide() {
			goToSlide(currentSlide - 1);
		}

		function goToSlide(n) {
			slides[currentSlide].className = '.hotel-slider cover';
			currentSlide = (n + slides.length) % slides.length;
			slides[currentSlide].className = '.hotel-slider cover showing';
		}

		var playing = true;
		var pauseButton = document.querySelector('.hotel-slider .buttons > .pause');

		function pauseSlideshow() {
			pauseButton.style.background = "rgba(6,154,12,.4)";
			playing = false;
			clearInterval(slideInterval);
		}

		function playSlideshow() {
			pauseButton.style.background = "rgba(0,0,0,.7)";
			playing = true;
			slideInterval = setInterval(nextSlide, 5000);
		}

		pauseButton.onclick = function () {
			if (playing) {
				pauseSlideshow();
			} else {
				playSlideshow();
			}
		};

		var next = document.querySelector('.hotel-slider .buttons .next');
		var previous = document.querySelector('.hotel-slider .buttons .prev');

		next.onclick = function () {
			pauseSlideshow();
			nextSlide();
		};
		previous.onclick = function () {
			pauseSlideshow();
			previousSlide();
		};

	}
	SliderHotel();

	//SLIDER GŁOWNA
	/* slider główny */

	// formularz kontaktowy
	(function (form, inputs, notify_bar, submit) {
		function veryfi(field) {
			var type = $(field).attr('value-type');
			var value = $(field).val();

			switch (type) {
			case 'person':
				return /^\D[\D\s \-]+$/.test(value);

				break;
			case 'subject':
			case 'message':
				return /^[^<>]+$/.test(value);

				break;
			case 'email':
				return /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/.test(value);

				break;
			case 'phone':
				return /^(\+\d+\s*)?(\(\d+\)\s*)?(\d+(\s|\-)*)+$/.test(value);

				break;
			default:
				return false;

			}

		}

		form
		.on({
			check: function (e, field) {
				var res = veryfi(field);
				form.triggerHandler('mark', [field, res]);
				return res;

			},
			mark: function (e, field, verified) {
				if (verified === true) {
					$(field).removeClass('invalid');
					$(field).addClass('valid');

				} else {
					$(field).removeClass('valid');
					$(field).addClass('invalid');

				}

			},
			send: function( e ){
				var data = new FormData( form[0] );
				
				$.ajax({
					method: 'POST',
					url: '../../ajax-kontakt/',
					data: data,
					contentType: false,
					processData: false,
					success: function( data, status, xhr ){
						try{
							console.log( data );
							var resp = JSON.parse( data );
							form.triggerHandler( 'notify', [ resp.status, resp.msg ] );
							
						}
						catch( err ){
							console.error( err );
							form.triggerHandler( 'notify', [ 'error', 'Błąd odpowiedzi serwera.' ] );
							
						}
						
					},
					error: function( xhr, status, data ){
						console.error({
							xhr: xhr,
							status: status,
							data: data
							
						});
						form.triggerHandler( 'notify', [ 'error', 'Błąd komunikacji z serwerem.' ] );
						
					},
					
				});
				
			},
			notify: function( e, status, msg ){
				notify_bar
				.hide()
				.removeClass( 'success, fail' )
				.addClass( status )
				.html( msg )
				.slideDown();
				
			},
			
		});

		inputs
		.blur(function (e) {
			form.triggerHandler('check', $(this));

		});

		submit
		.click(function (e) {
			e.preventDefault();
			
			inputs.each( function(){
				form.triggerHandler( 'check', $(this) );
				
			} );
			
			console.log( inputs.filter('.valid').length === inputs.length );
			
			if ( inputs.filter('.valid').length === inputs.length ) {
				console.info('formularz zweryfikowany pomyślnie');
				form.triggerHandler( 'send' );

			}
			else {
				console.warn('formularz nie został wypełniony poprawnie');

			}

		});
		
		notify_bar
		.click( function( e ){
			$(this).slideUp();
			
		} );
		
	})
	(
		$('form.fpcf'),
		$('form.fpcf').find('input, textarea'),
		$('form.fpcf .notify'),
		$('form.fpcf .submit')
	);
	
	// rezerwacja
	(function( form, addUser, zgody, personal ){
		
		var person_proto = personal.find( '.person:first' ).clone( true );
		person_proto.find( 'input' ).attr( 'required', null );
		
		addUser.click( function( e ){
			e.preventDefault();
			
			$( this )
			.parent()
			.prevAll( '.person' )
			.children( '.body' )
			.slideUp();
			
			$( this )
			.parent()
			.before(
				person_proto
				.clone( true )
				
			);
			
		} );
		
		personal.on( 'click', '.person > .head', function( e ){
			$(this)
			.siblings( '.body' )
			.slideToggle();
			
			$(this)
			.parent()
			.siblings( '.person' )
			.children( '.body' )
			.slideUp();
			
		} );
		
		zgody
		.on({
			invalid: function( e ){
				TweenLite.fromTo(
					$(this).parent(),
					1,
					{
						backgroundColor: 'red',
					},
					{
						backgroundColor: 'transparent',
						
					}
				);
				
			},
			
		});
		
	})
	(
		$( '.rezerwuj-single form' ),
		$( '.rezerwuj-single form .add' ),
		$( '.rezerwuj-single form .zgody input' ),
		$( '.rezerwuj-single form .personal' )
		
	);
	
	// oferta pojedyncza
	(function( zakladki, zakladki_head, zakladki_content ){
		zakladki
		.find('h1, h2, h3, h4, h5, h6')
		.addClass('theme-color');
		
		zakladki_head.click( function( e ){
			var index = $(this).index();

			$(this)
			.addClass('active')
			.siblings()
			.removeClass('active');
			
			zakladki_content
			.eq( index )
			.addClass('active')
			.siblings()
			.removeClass('active');
			
		} );
		
	})
	(
		$('#oferta-single .zakladki'),
		$('#oferta-single .zakladki .head .item'),
		$('#oferta-single .zakladki .tabs .item')
	)

});
