$(function(){
	if( $( '#map' ).length > 0 ){
		/* var pin = {
			url: 'http://poligon.scepter.pl/PiotrM/Fun_Race/img/marker.png',
		}; */
		
		/* var markers = [
			{
				// uluru
				position: {
					lat: 49.423736,
					lng: 20.724273,
				},
				icon: pin,
			},
			{
				// szczawnica
				position:{
					lat: 49.416218,
					lng: 20.528791,
				},
				icon: pin,
			},
			{
				// krynica
				position: {
					lat: 49.418502,
					lng: 20.926673,
				},
				icon: pin,
			},
			
		]; */
		
		var map = $( '#map' )
		.gmap3({
			address:"Poland",
			zoom: 10,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			navigationControl: true,
			scrollwheel: false,
			gestureHandling: 'cooperative',
			mapTypeControl: false,
			streetViewControl: false,
			
		})
		.marker( markers )
		.then( function( res ){
			map.fit();
			
		} );
		
	}	
	
});