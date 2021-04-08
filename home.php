<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">

  <div id="navbar">
   <a href="index.php">Home</a>
   <a href="loginPage.php">Login</a>
   <a href="registrationPage.php">Registration</a>
  </div>

<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
  
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<BODY>
	<div class="phppot-container">
  <div class="sign-up-container">
			<div class="signup-align">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">Welcome to Macro-Homes <?php echo $username;?></div>
	</div>

    <?php

?>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</BODY>
</HTML>
