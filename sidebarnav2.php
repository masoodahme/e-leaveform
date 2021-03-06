<?php
$name=$_SESSION['NAME'];
?>
<!DOCTYPE html>
<html lang="en">

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
		<link rel="stylesheet" href="registration.css">
		<style>
			body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
			.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
			.w3-third img:hover{opacity: 1}
		</style>
  <body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <!--<h3 class="w3-padding-64 w3-center"><b>SOME<br>NAME</b></h3>-->
  <i class="fas fa-user-circle fa-10x"></i>
  <br>
  <h3 class="w3-padding-12 "><?php echo $name ?></h3>
  <br>
  <a href="employee_choice.php" onclick="w3_close()"  class="w3-bar-item w3-button" style="text-decoration:none"><i class="fa fa-fw fa-home" ></i>  <h5>Home</h5></a>
  <a href="dayslimit.php" onclick="w3_close()"  class="w3-bar-item w3-button" style="text-decoration:none"><i class="far fa-file-alt"></i>  <h5> Leave Application </h5></a>
  <a href="employee_leave_statistics.php" onclick="w3_close()" class="w3-bar-item w3-button" style="text-decoration:none"><i class="fas fa-chart-pie"></i> <h5>Leave Statistics</h5></a>
  <a href="logout.php"  class="w3-bar-item w3-button" style="text-decoration:none"><i class="fas fa-sign-out-alt"></i> <h5> Logout</h5></a>
  <a href="javascript:void(0)" onclick="w3_close()" style="text-decoration:none" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <!--<a href="#" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT ME</a> 
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>-->
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">MENU</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>

