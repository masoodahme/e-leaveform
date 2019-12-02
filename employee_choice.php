<?php
    session_start();
    if(!isset($_SESSION['NAME']))
    {
        echo"<script>location.href='index.php'</script>";
    }
?>
<html>
	<head>
		<title>
			REGISTRATION FORM
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/9da2bd7fea.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="registration.css">
	
		<style>
		/* Make the image fully responsive */
		.carousel-inner img {
			width: 100%;
			height: 100%;
			}
		</style>
		
		<?php include('sidebarnav2.php'); ?>
           
			<!-- !PAGE CONTENT! -->
			<div class="w3-main" style="margin-left:300px">

			<!-- Push down content on small screens --> 
			<div class="w3-hide-large" style="margin-top:83px"></div>
			
				<a href="employee_choice.php" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED" style="float:left;width:60px;height:60px;"></a>
				<center><strong><h1>WELCOME TO AYISHA TECH LIMITED</h1></strong></center>
			<!-- Photo grid -->
			<!--<div class="w3-row">
				
				<div class="w3-second">
					<img src="linkedin.jpg" style="width:100%" onclick="onClick(this)" alt="LINKEDIN">
     
				</div>
				
			</div>-->
			<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
  
		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="linkedin.jpg"  onclick="onClick(this)"  alt="company moto" style="width:100%" >
			</div>
			<div class="carousel-item">
				<img src="workForce1.jpg" onclick="onClick(this)"  alt="workForce Development"  style="width:100%" >
			</div>
			<div class="carousel-item">
				<img src="Wall.jpg"  onclick="onClick(this)"  alt="Goal of the Company"  style="width:100%" >
			</div>
		</div>
  
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>


  <!-- Pagination -->
			<!--<div class="w3-center w3-padding-32">
				<div class="w3-bar">
					<a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
					<a href="#" class="w3-bar-item w3-black w3-button">1</a>
					<a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
					<a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
					<!--<a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
					<a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
				</div>
			</div>-->
  <!-- Modal for full size images on click-->
		<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
			<span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
			<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
				<img id="img01" class="w3-image">
				<p id="caption"></p>
			</div>
		</div>
	
	</div>

 
    </body>
</html>