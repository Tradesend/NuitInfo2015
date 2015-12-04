<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="icon" href="../favicon.ico" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <title>Citizen Crisis</title>
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 13,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(48.1132816, -1.7005318), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"color":"#4c4c4c"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#cccccc"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"lightness":"-60"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#4c4c4c"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#4c4c4c"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#808080"},{"lightness":"-30"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"},{"color":"#00797f"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"-30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"-30"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#a6c6c8"},{"saturation":"28"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"lightness":"-40"},{"saturation":"-40"},{"gamma":"1"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"color":"#a6c6c8"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":"-50"}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
            // Let's also add a marker while we're at it
            // var marker = new google.maps.Marker({
            //     position: new google.maps.LatLng(40.6700, -73.9400),
            //     map: map,
            //     title: 'Snazzy!'
            // });
            var marker2 = new google.maps.Marker({
                position: new google.maps.LatLng(48.1040993,-1.6887247),
                map: map,
                title: 'LOL!'
            });
            var citymap = {
              vancouver: {
                center: {lat: 48.1040993, lng: -1.6887247},
                population: 10
              },
              hello: {
                center: {lat: 48.1307958, lng: -1.7075325},
                population: 50
              },
              prout: {
                center: {lat: 48.1607958, lng: -1.6675325},
                population: 30
              },
              caca: {
                center: {lat: 48.1307958, lng: -1.6675325},
                population: 200
              },
              pipi: {
                center: {lat: 48.0907958, lng: -1.5875325},
                population: 50
              }

            };
            for (var city in citymap) {
              // Add the circle for this city to the map.
              var cityCircle = new google.maps.Circle({
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#FF0000',
                fillOpacity: 0.35,
                map: map,
                center: citymap[city].center,
                radius: Math.sqrt(citymap[city].population) * 100
              });
            }
        }
    </script>
</head>
<body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
    <header>
      <ul id="dropdown1" class="dropdown-content cyan darken-3">
        <li><a href="#!">Profile</a></li>
        <li><a href="#!">settings</a></li>
        <li class="divider"></li>
        <li><a href="#!">Log-out</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper cyan darken-3">
          <a href="#!" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Pontchaillou<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>
      <div class="row cyan darken-3">
        <div class="col s12 cyan darken-3">
          <ul class="tabs cyan darken-3">
            <li class="tab col s3"><a href="#test1">JEsais pas</a></li>
            <li class="tab col s3"><a class="active" href="#test2">Map</a></li>
            <li class="tab col s3"><a href="#test3">Ici non plus</a></li>
          </ul>
        </div>
      </div>
    </header>
