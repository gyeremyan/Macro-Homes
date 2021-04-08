<?php
include 'database.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    
    <style>
       #map {
         height: 400px;
         /* The height is 400 pixels */
         width: 100%;
         /* The width is the width of the web page */
       }
    </style>
</head>
<TITLE>Macro Homes - Search Results</TITLE>
<body>

<header>
    <div id="navbar">
        <a href="index.php"><img src="img/macrohomes.png" alt="image" width="50" height="30"></a> 
        <a href="index.php">Home</a>
        <a href="loginPage.php">Login</a>
        <a href="registrationPage.php">Registration</a>
    </div>
</header>

<div class="container-fluid">
    <div class="row py-5">
        <div class="col-lg-9 mx-auto text-center">
            <h1 class="display-4">Search Results</h1>
        </div>
    </div>
<div class="houseList">
<div class="row mb-5">
    <div class="col-lg-8 mx-auto bg-white p-5 rounded shadow">
    <?php require_once 'searchForm.php'; ?>
    </div>
</div>
  

  <?php
    require 'filterOptions.php';
    $search = mysqli_real_escape_string($conn, filter_input(INPUT_GET, 'search'));

    $where="WHERE (address = '$search' OR state = '$search' OR zipcode = '$search' OR city = '$search')";
    
    //append 'and' conditions to sql statement
    if(count($conditions) === 1){
        $where .= ' AND ' . $conditions[0];
    } else if(count($conditions) > 1) {
        $where .= ' AND ' . implode(' AND ', $conditions);
    }
    $_SESSION['varWhere'] = $where;
    
    if($inputOrder !== 'Any'){
        $order = "ORDER BY ";
        switch ($inputOrder){
        case "address":
          $order .= "address";
          break;
        case "city":
          $order .= "city";
          break;
        case "zipcode":
          $order .= "zipcode";
          break;
        case "state":
          $order .= "state";
          break;
        case "beds":
          $order .= "numbed";
          break;
        case "baths":
          $order .= "numbath";
          break;
        case "price":
          $order .= "price";
          break;
        case "squarefootage":
          $order .= "squarefootage";
          break;
        }
        $orderby = "";
        switch ($orderType) {
        case "ascend":
          $orderby = " ASC";;
          break;
        case "descend":
          $orderby = " DESC";;
          break;
        }
    }
    if ($inputOrder !== null && $inputOrder !== 'Any' && $orderType !== null && $orderType !== 'Any'){
        $sql = "SELECT * FROM combinedhomes $where $order $orderby";
    } else {
        $sql = "SELECT * FROM combinedhomes $where";
    }
    $result = mysqli_query($conn, $sql);
    $connectsqli = $conn->query($sql);
    //display sort message
    if($inputOrder !== null && $inputOrder !== 'Any' && $orderType !== null && $orderType !== 'Any') { ?>
        <h4 style="color: black; text-align: center;">Sorting by <?php echo $inputOrder . " in " . $orderType . "ing order."; ?></h4>  
    <?php     
    }
    ?>
    <div class="container mt-2">
        <div class="row">
           
                <div id="map"></div>
           
            
    <?php
      if(!empty($connectsqli) && $connectsqli->num_rows > 0){
      while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block">
                <a href="detailsPage.php?id=<?php echo $row['id'] ?>" style="text-decoration: none; color: black;">
                    <img class='card-img-top' src="<?php echo $row['image'] ?>" alt='Not Found' onerror=this.src="img/noimg.jpg">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $row['address'] ?></h3>
                        <p><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></p>
                        <p><?php echo '$' . $row['price'] ?></p>
                        <p><?php echo $row['numbed'] . " bd " . $row['numbath'] . " bth " . $row['squarefootage'] . " SqFt" ?></p>                        
                    </div>
                </a>
            </div>
        </div>
            <div style="display: none;">
                <?php 
                $endingLat = $row['Latitude'];
                $endingLong = $row['Longitude'];
                ?>
            </div>
    <?php
      }
    }
  
    else{
            echo "There are no results matching your search!";
    }
  $conn->close();
?>
        </div>
    </div>

        </div>
    </div>
    <script>
    var customLabel = {
      Homes: {
        label: 'H'
      }

    };

      function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(<?php echo $endingLat; ?>, <?php echo $endingLong; ?>),
        zoom: 12
      });
      var infoWindow = new google.maps.InfoWindow;

        // Change this depending on the name of your PHP or XML file
        downloadUrl('googleMarkers.php', function(data) {
          var xml = data.responseXML;
          var markers = xml.documentElement.getElementsByTagName('marker');
          Array.prototype.forEach.call(markers, function(markerElem) {
            var id = markerElem.getAttribute('id');
            var image = markerElem.getAttribute('image');
            var address = markerElem.getAttribute('address');
            var city = markerElem.getAttribute('city');
            var state = markerElem.getAttribute('state');
            var zipcode = markerElem.getAttribute('zipcode');
            var type = markerElem.getAttribute('Type');
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('Latitude')),
                parseFloat(markerElem.getAttribute('Longitude')));
                
            <?php $id; ?>
            var strAddress = address + " " + city + ", " + state + ", " + zipcode;
            var infowincontent =strAddress;
            var icon = customLabel[type] || {};
            var marker = new google.maps.Marker({
              map: map,
              position: point,
              label: icon.label
            });
            marker.addListener('click', function() {
              infoWindow.setContent('<a href="detailsPage.php?id=' + id +'" style="text-decoration: none; color: black" class="font-weight-bold";>'+ infowincontent + '</a>' + 
                      '<a href="detailsPage.php?id=' + id + '"><img class="card-img-top" src="' + image + '"></a>');
              infoWindow.open(map, marker);
            });
          });
        });
      }


    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
  </script>
  <script defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1ylab17gj6jipoV3CfXylv9tX8WELuKE&callback=initMap">
  </script>
</body>
</html>
