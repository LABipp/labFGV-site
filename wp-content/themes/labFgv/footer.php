<div class="row fullWidth informacoes">
    <div class="small-12 medium-4 column container contato">
        <h1>CONTATE-NOS</h1>
        <br>
        <br>
        <p>labfgv@gmail.com</p>
    </div>
    
    <div class="small-12 medium-4 column container endereco">
        <h1>VISITE-NOS</h1>
        <br>
        <br>
        <p>Praia de Botafogo, 190<br>Rio de Janeiro, RJ<br>CEP 22250-900</p>
    </div>
    
    <div class="small-12 medium-4 column container mensagem">
        <h1>DEIXE SUA<br>MENSAGEM</h1>
        <br>
        <br>
        <p>Praia de Botafogo, 190<br>Rio de Janeiro, RJ<br>CEP 22250-900</p>
    </div>
</div>

<div id="mapa" class="row fullWidth"></div>
<div class="row">
    <div class="small-4 offset-8 column footerLogo">
    </div>
</div>
</body>
<script src="<?=$home?>/js/vendor/jquery.js"></script>
<script src="<?=$home?>/js/vendor/foundation.js"></script>
<script src="<?=$home?>/js/vendor/slick.js"></script>
<script src="<?=$home?>/js/app.js"></script>
<script>
    function Map() {
        var map = new google.maps.Map(document.getElementById('mapa'), {
          center: {lat: -8.9415398, lng: -60.1801345},
          scrollwheel: false,
          zoom: 3,
          styles: [
              {
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#1d2c4d"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#8ec3b9"
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#1a3646"
                  }
                ]
              },
              {
                "featureType": "administrative.country",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#4b6878"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#64779e"
                  }
                ]
              },
              {
                "featureType": "administrative.province",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#4b6878"
                  }
                ]
              },
              {
                "featureType": "landscape.man_made",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#334e87"
                  }
                ]
              },
              {
                "featureType": "landscape.natural",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#023e58"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#283d6a"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#6f9ba5"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#1d2c4d"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#023e58"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#3C7680"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#304a7d"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#98a5be"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#1d2c4d"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#2c6675"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#255763"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#b0d5ce"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#023e58"
                  }
                ]
              },
              {
                "featureType": "transit",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#98a5be"
                  }
                ]
              },
              {
                "featureType": "transit",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#1d2c4d"
                  }
                ]
              },
              {
                "featureType": "transit.line",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#283d6a"
                  }
                ]
              },
              {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#3a4762"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#0e1626"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#4e6d70"
                  }
                ]
              }
            ]
            
        });
        
        function CreateMarket(pos, m, tit){
            var marker = new google.maps.Marker({
            position: pos,
            map: m,
            title: tit
            });
        }
        
        CreateMarket({lat: -22.9415398, lng: -43.1801345}, map, "LabFGV");
        CreateMarket({lat: -34.6036844, lng: -58.3815591}, map, "Consejo Latinoamericano de Ciencias Sociales (CLACSO)");
        CreateMarket({lat: -34.9011127, lng: -56.1645314}, map, "Agencia de Gobierno Electrónico y Sociedad de la Información y del Conocimiento (AGESIC)");
        CreateMarket({lat: -34.6036844, lng: -58.2815591}, map, "Laboratorio de Innovación – Smartlab");
        CreateMarket({lat: -34.6089029, lng: -58.3939168}, map, "Laboratorio de Innovación y Justicia Educativa");
        CreateMarket({lat: 4.6482837, lng: -74.2478938}, map, "Centro de Innovación Pública Digital");
        CreateMarket({lat: 19.39068, lng: -99.2836986}, map, "Ethos – Laboratorio de Políticas Públicas");
        CreateMarket({lat: -12.0553011, lng: -77.0802423}, map, "Escuela de Gobierno e Políticas Públicas – PUCP");
        CreateMarket({lat: 18.3848136, lng: -66.1283819}, map, "Centro de Innovación Social");
        CreateMarket({lat: -0.1865938, lng: -78.5706248}, map, "Laboratorio de Innovación Quito");
        CreateMarket({lat: -33.4533624, lng: -70.714213}, map, "Laboratorio de Gobierno");
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBcAhkSQEepGMJBnIWcbIN6BmRdfs6ohk&callback=Map"
    async defer></script>
</html>
