<?php
include 'database.php';

?>

<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
	    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Merriweather|Monserrat">

</head>
<TITLE>Macro Homes: Homes in California</TITLE>
<body>

<div id="navbar"/>
        <a href="index.php">Home</a>
        <a href="loginPage.php">Login</a>
        <a href="registrationPage.php">Registration</a>
    </div>
	
<!--Nav-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color:	#D3D3D3;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
       <li class="nav-item">
         <a class="nav-link" href="colorado.php">Colorado</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="conneticut.php">Conneticut</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="newYork.php">New York</a>
       </li>
     </ul>
    </div>
    </nav>
    <!--Nav-->
	
<div class="container-fluid">
    <div class="row py-5">
        <div class="col-lg-9 mx-auto text-center">
            <h1 class="display-4">Homes in California</h1>
      </div>
				</div>
				
				  </div>
				






<div class="container">
  <div class="card-deck" style='margin-bottom: 80px'>
  
    <?php
    require 'filterOptions.php';

    $sql = "SELECT * FROM combinedhomes WHERE  state='ca' ";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
	
    
    if($queryResults > 0){
      while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-3 col-sm-6">
            <div class="card card-block">
                <a href="detailsPage.php?id=<?php echo $row['id'] ?>" style="text-decoration: none; color: black;">
                <img class='card-img-top' src="<?php echo $row['image'] ?>" alt='Not Found' onerror=this.src="https://d3bmimpiifbojs.cloudfront.net/wp-content/uploads/2017/04/no-image-image-1.png?x83809">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $row['address'] ?></h3>
                        <p><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></p>
                        <p><?php echo '$' . $row['price'] ?></p>
                        <p><?php echo $row['numbed'] . " bd " . $row['numbath'] . " bth " . $row['squarefootage'] . " SqFt" ?></p>                        
                    </div>
                </a>
            </div>
        </div>
      <?php
}
}


  ?>
</div>
</div>

		</body>
		</html>
