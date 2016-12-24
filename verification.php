<?php
  $firstName = $_POST['firstName'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFSU CS Department - CSC 642 Fall 2016 project: Form UI Alvin Lu alvinlu@mail.sfsu.edu</title>
    <link rel="stylesheet" href="/~alvinlu/almondmilk.github.io/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/~alvinlu/almondmilk.github.io/dist/css/bootstrapValidator.css" />

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->
    <link class="jsbin" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/~alvinlu/almondmilk.github.io/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/~alvinlu/almondmilk.github.io/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/~alvinlu/almondmilk.github.io/dist/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="/~alvinlu/almondmilk.github.io/dist/js/photo.js"></script>

    <style>
        article,
        aside,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
        #floating-panel {
          position: absolute;
          top: 10px;
          left: 25%;
          z-index: 5;
          background-color: #fff;
          padding: 5px;
          border: 1px solid #999;
          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 30px;
          padding-left: 10px;
        }

    </style>

  </head>
  <body>
    <div class="col-xs-8 col-xs-offset-2">

        <div class="page-header">
            <h2 style='text-align: center;'>Please verify your submission</h2>
        </div>

        <div class="row">
            <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">First Name</h5>
            <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
                <?php echo $firstName;?>
                <br>
                <script>
                  document.write('<?php echo $firstName;?>');
                </script>
            </h5>
        </div>

        <!-- google maps -->
        <div class="row">
            <h5 style="text-align: right;" class="col-xs-3 control-h5 style="text-align: right;"">Google Maps</h5 style="text-align: right;">
            <h5 style="text-align: left;" class="col-xs-4 control-h5 style="text-align: right;"">

              <div id="map" style="width:400px;height:400px;background:white"></div>
            </h5 style="text-align: right;">
        </div>
    </div>

    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();
        //var address = '3654 Baldwin Hills Court South San Francisco';
        var address = replacedStreet + replacedCity + replacedState + replacedZipCode;
        geocodeAddress(geocoder, map, address)
        // document.getElementById('submit').addEventListener('click', function() {
        //   geocodeAddress(geocoder, map);
        // });
      }

      function geocodeAddress(geocoder, resultsMap, address) {
        //var address = document.getElementById('address').value;
        //address = '3654 Baldwin Hills Court South San Francisco';
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5UB-333Aqb-x4CWxmqShkuy91KzSRxSM&callback=initMap" async defer></script>
  </body>
</html>
