<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php'; ?>   
    <body>
        <div class="jumbotron text-center">
            <h1>Macro Homes</h1>
        </div>
	
	<h1 style="text-align: center">Featured Cities</h1>


	<div class="container">
	  <div class="row row-cols-3">
		<div class="col">
                    <a href="houseListings.php?search=Claremont">
                      <div class="card bg-dark text-white">                      
                            <img src="https://media-cdn.trulia-local.com/neighborhood-media-service-prod/ca/claremont/north-claremont/2178-ca_la_north_claremont_165168_329_v3_1800x_cfit.jpg" width=100% height=300px style="object-fit: cover" class="card-img" alt="Claremont">                 
                            <div class="card-img-overlay">
                              <h5 class="card-title">Claremont, CA</h5>
                            </div>
                      </div>
                    </a>
		</div>
		<div class="col">
                    <a href="houseListings.php?search=Littleton">
                        <div class="card bg-dark text-white">
                              <img src="https://www.uncovercolorado.com/wp-content/uploads/2018/10/littleton-co-neighborhood-ken-caryl2-1440x810.jpg" width=100% height=300px style="object-fit: cover" class="card-img" alt="Littleton">
                              <div class="card-img-overlay">
                                <h5 class="card-title">Littleton, CO</h5>
                              </div>
                        </div>
                    </a>
		</div>
		<div class="col">
                    <a href="houseListings.php?search=Glenville">
                        <div class="card bg-dark text-white">
                              <img src="https://images1.apartments.com/i2/SKSI4W8rfqgO7YeK9yXmAzRymt3CoCVW-_0fmdujJtw/111/the-reserve-at-glenville-glenville-ny-community.jpg" width=100% height=300px style="object-fit: cover" class="card-img" alt="Glenville">
                              <div class="card-img-overlay">
                                <h5 class="card-title">Glenville, NY</h5>
                              </div>
                        </div>
                    </a>
		</div>
		<div class="col">
                    <a href="houseListings.php?search=Niskayuna">
                        <div class="card bg-dark text-white">
                              <img src="https://www.ge.com/research/sites/default/files/2018-11/niskayuna-new-york-hero.jpg" width=100% height=300px style="object-fit: cover" class="card-img" alt="Niskayuna">
                              <div class="card-img-overlay">
                                <h5 class="card-title">Niskayuna, NY</h5>
                              </div>
                        </div>
                    </a>
		</div>
		<div class="col">
                    <a href="houseListings.php?search=Schenectady">
                        <div class="card bg-dark text-white">
                              <img src="http://media.bizj.us/view/img/4737441/schenectady-misc-12-2014-01*1200xx6000-3375-0-313.jpg" width=100% height=300px style="object-fit: cover" class="card-img" alt="Schenectady">
                              <div class="card-img-overlay">
                                <h5 class="card-title">Schenectady, NY</h5>
                              </div>
                        </div>
                    </a>
		</div>
		<div class="col">
                    <a href="houseListings.php?search=West+Haven">
                        <div class="card bg-dark text-white">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/West_Haven_Main_and_Campbell_110.JPG" width=100% height=300px style="object-fit: cover" class="card-img" alt="West Haven">
                              <div class="card-img-overlay">
                                <h5 class="card-title">West Haven, CT</h5>
                              </div>
                        </div>
                    </a>
		</div>
	  </div>
	</div>
	<br>
	
	<h1 style="text-align: center">Search for a Home</h1>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto bg-white p-5 rounded shadow">
    <?php require_once 'searchForm.php'; ?>
            </div>
        </div>
    </div>



  <div class="container">
  <div class="card-deck" style='margin-bottom: 80px'>
    <?php
    require 'filterOptions.php';

    $sql = "SELECT * FROM combinedhomes ORDER BY Rand() limit 3";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    
    if($queryResults > 0){
      while($row = mysqli_fetch_assoc($result)) { ?>
        <div class='card mb-3' style='width: 18rem;'>
        <a href="detailsPage.php?id=<?php echo $row['id'] ?>" style="text-decoration: none; color: black;">
                <img class='card-img-top' src="<?php echo $row['image'] ?>" alt='Not Found' onerror=this.src="img/noimg.jpg">
            <div class='container'>
              <h4><?php echo $row['address'] ?></h4>
                <p><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></p>
                <p><?php echo  $row['price']; ?></p>
                <p><?php echo $row['numbed'] . " bed - " . $row['numbath'] . " bath - " . $row['squarefootage'] . " Square Feet" ?></p>
               
            </div>
        </div>
      <?php
}
}

  $conn->close();
  ?>
</div>
      </div>

    </body>
</html>
