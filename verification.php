<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$education = $_POST['education'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$date = $_POST['date'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zipCode'];
$category = $_POST['category'];
$comment = $_POST['comment'];
$terms = $_POST['terms'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SFSU CS Department - CSC 642 Fall 2016 project: Form UI Alvin Lu alvinlu@mail.sfsu.edu</title>
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="../dist/css/bootstrapValidator.css" />

  <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
  <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->
  <link class="jsbin" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" rel="stylesheet" type="text/css" />
  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../jquery/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../dist/js/bootstrapValidator.js"></script>
  <script type="text/javascript" src="../dist/js/photo.js"></script>

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
  <script>
      //forms
          // first name
          var firstName = "<?php echo $firstName; ?>";
          // last name
          var lastName = "<?php echo $lastName; ?>";
          // gender
          var gender = "<?php echo $gender; ?>";
          // education
          var education = "<?php echo $education; ?>";
          // phone number
          var phoneNumber = "<?php echo $phoneNumber; ?>";
          // email
          var email = "<?php echo $email; ?>";
          // date
          var date = "<?php echo $date; ?>";
          // street
          var street = "<?php echo $street; ?>";
          // city
          var city = "<?php echo $city; ?>";
          // state
          var state = "<?php echo $state; ?>";
          // zip code
          var zipCode = "<?php echo $zipCode; ?>";
          // category
          var category = "<?php echo $category; ?>";
          // comment
          var comment = "<?php echo $comment; ?>";
          // terms
          var terms = "<?php echo $terms; ?>";

  </script>
  <div class="col-xs-8 col-xs-offset-2">

    <div class="page-header">
      <h2 style='text-align: center;'>Please verify your submission</h2>
    </div>

        <div class="page-header">
            <h4 style='text-align: left;'>Personal Information</h4>
        </div>

        <!-- First Name -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">First Name</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(firstName);</script>
          </h5>
        </div>

        <!-- Last Name -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Last Name</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(lastName);</script>
          </h5>
        </div>

        <!-- Gender -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Gender</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(gender);</script>
          </h5>
        </div>
        <!-- Education -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Education</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(education);</script>
          </h5>
        </div>

        <!-- Phone Number -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Phone Number</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(phoneNumber);</script>
          </h5>
        </div>

        <!-- Email -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Email</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(email);</script>
          </h5>
        </div>

        <!-- Date -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Date</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(date);</script>
          </h5>
        </div>

        <div class="page-header">
            <h4 style='text-align: left;'>Location</h4>
        </div>

        <!-- google maps -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5 style="text-align: right;"">Google Maps</h5 style="text-align: right;">
            <h5 style="text-align: left;" class="col-xs-4 control-h5 style="text-align: right;"">

              <div id="map" style="width:400px;height:400px;background:white"></div>
            </h5 style="text-align: right;">
        </div>


        <!-- street -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Street</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(street);</script>
          </h5>
        </div>

        <!-- city -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">City</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(city);</script>
          </h5>
        </div>

        <!-- state -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">State</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(state);</script>
          </h5>
        </div>

        <!-- zip code -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Zip Code</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(zipCode);</script>
          </h5>
        </div>

        <!-- category -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Category</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(category);</script>
          </h5>
        </div>

        <!-- comment -->
        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Comment</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
            <script>document.write(comment);</script>
          </h5>
        </div>

        <div class="row">
          <h5 style="text-align: right;" class="col-xs-3 control-h5" style="text-align: right;">Uploaded Image</h5>
          <h5 style="text-align: left;" class="col-xs-4 control-h5" style="text-align: right;">
              <?php
              $target_dir = 'uploads/';

                $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                // Check if image file is a actual image or fake image
                if (isset($_POST['submit'])) {
                    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
                    if ($check !== false) {
                        echo 'File is an image - '.$check['mime'].'.';
                        $uploadOk = 1;
                    } else {
                        echo 'File is not an image.';
                        $uploadOk = 0;
                    }
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    if($target_file != "uploads/"){
                        echo 'Sorry, file already exists.';
                        $uploadOk = 0;
                    }
                    elseif(($_FILES['fileToUpload']['size'] > 5000000) && ($target_file != "uploads/")){
                        echo 'Sorry, your file is too large.';
                        $uploadOk = 0;
                    }
                    elseif(($imageFileType != 'jpg' && $imageFileType != 'png') && ($imageFileType != 'jpeg'
                    && $imageFileType != 'gif' && $target_file != "uploads/")){
                        echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
                        $uploadOk = 0;
                    }elseif($target_file == "uploads/"){
                        $uploadOk = 2;
                    }
                    $uploadOk = $uploadOk + 0;
                }
                // // Check file size
                // if ($_FILES['fileToUpload']['size'] > 5000000) {
                //     echo 'Sorry, your file is too large.';
                //     $uploadOk = 0;
                // }
                // // Allow certain file formats
                // if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
                // && $imageFileType != 'gif') {
                //     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
                //     $uploadOk = 0;
                //}
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo 'Sorry, your file was not uploaded.';
                  // if everything is ok, try to upload file
                } elseif($uploadOk == 2){
                  $uploadOk = 0;
                } else {
                    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                        echo 'The file '.basename($_FILES['fileToUpload']['name']).' has been uploaded.';
                        echo '<img src="'.$target_file.'" alt="">';
                    } else {
                        echo 'Sorry, there was an error uploading your file.';
                    }
                }
                ?>
          </h5>
        </div>

    </div>

    <script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: {lat: 37.77493, lng: -122.419416}
      });
      var geocoder = new google.maps.Geocoder();
      //var address = '3654 Baldwin Hills Court South San Francisco';
      var address = street + city + state + zipCode;
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
