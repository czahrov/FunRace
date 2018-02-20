
function initMap() {
          var uluru = {lat: 49.423736, lng: 20.724273};
          var szczawnica = {lat: 49.416218, lng: 20.528791};
          var krynica = {lat: 49.418502, lng: 20.926673};
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
        
          center: uluru,
          zoom: 12,
          //styles: styles
        });
  
    var image = {
        url: 'http://poligon.scepter.pl/PiotrM/Fun_Race/img/marker.png', 
    };
        var marker = new google.maps.Marker({
          position: szczawnica,
          map: map,
          icon: image,
        });
        var marker = new google.maps.Marker({
          position: krynica,
          map: map,
          icon: image,
        });
      }