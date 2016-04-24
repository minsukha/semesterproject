<html>
  <head>
    <title>About - Main Street Market</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map {
        height: 500px;
        width: 500px;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body>
      <article>
          <?php
                require_once("header.php");
                echo "Contact: minsuk.ha@bobcats.gcsu.edu";
            ?>

        <div id="map"></div>
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 32.847495, lng: -83.194136},
                    zoom: 12
                });

                var marker = new google.maps.Marker({
                    position: {lat: 32.847495, lng: -83.194136},
                    map: map,
                    title: 'Main Street Market'
                });

                var contentString =
                    '<div id="content">'+
                        '<div id="siteNotice">'+
                        '</div>'+
                        '<h1 id="firstHeading" class="firstHeading">Main Street Market</h1>'+
                        '<div id="bodyContent">'+
                            '<p><b>Main Street Market</b>, located at 112 Main Street McIntyre, Ga 31054. Home to all of your favorite items </p>'+
                            '</div>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbh--pdFLgPgTOip00b7jeBErFsITe4Cc&callback=initMap"
        async defer></script>
      </article>
  </body>
</html>


