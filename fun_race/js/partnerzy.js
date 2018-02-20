			
			/* slider partnerów */
			(function( slider, arrows, viewbox, items ){
				var current = 0;
				var delay = 3000;
				var num = items.length;
				var mdown = false;
				var mdata = {};
				var itrv;
				
				slider
				.on({
					next: function( e ){
						current++;
						slider.triggerHandler( 'set' );
						
					},
					prev: function( e ){
						current--;
						slider.triggerHandler( 'set' );
						
					},
					set: function( e ){
						//var scrollLeft = Math.ceil( viewbox.prop( 'scrollLeft' ) );
						var scrollWidth = Math.floor( viewbox.prop( 'scrollWidth' ) );
						var width = Math.floor( viewbox.width() );
						var max = Math.floor( scrollWidth / ( width * 0.5 ) );
						
						current %= max;
						
						if( current < 0 ){
							current = max - 1;
							
						}
						
						//console.log( [current, max, scrollWidth, width] );
						
						TweenLite.to(
							viewbox,
							1.5,
							{
								scrollTo:{
									x: Math.round( width * 0.5 * current ),
									
								},
								ease: Power2.easeInOut,
								
							}
						);
						
					},
					start: function( e ){
						itrv = window.setInterval(function(){
							slider.triggerHandler( 'next' );
							
						},delay);
						
					},
					stop: function( e ){
						window.clearInterval( itrv );
						
					},
					mouseenter: function( e ){
						slider.triggerHandler( 'stop' );
						
					},
					mouseleave: function( e ){
						slider.triggerHandler( 'start' );
						
					},
					
				})
				.swipe({
					swipeLeft: function(){
						slider.triggerHandler( 'next' );
						
					},
					swipeRight: function(){
						slider.triggerHandler( 'prev' );
						
					},
					
				});
				
				arrows.eq(0).click(function(){
					slider.triggerHandler( 'prev' );
					
				});
				
				arrows.eq(1).click(function(){
					slider.triggerHandler( 'next' );
					
				});
				
				slider.triggerHandler( 'start' );
			})( $( '.partners .container .wrapper' ), $( '.partners .container .wrapper .pag' ), $( '.partners .container .wrapper .view' ), $( '.partners .container .wrapper .element ' ) );