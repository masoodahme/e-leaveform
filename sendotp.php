<?php

	if(!isset($_SESSION['NAME']))
	{
			echo"<script>location.href='index.php'</script>";
	}
?>
<html>
	<head>
		<title>
			OTP VERIFICATION
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="registration.css">
		<div class="w3-main" style="margin-left:300px">
		   <div class="w3-hide-large" style="margin-top:83px"></div>
			<?php
	
				$random=rand(10000,99999);
				$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
				//$con=mysqli_connect("localhost","root","","test");
				//$query="insert into 'otp' values ('$random') "; error because ; is missing
				$query="insert into `otp` values ('$random');";
				$result=mysqli_query($con,$query);
				//echo "could not insert".mysqli_error($con).mysqli_errno($con);
				if($result==true)
				{
					echo"
						<div class='alert alert-success alert-dismissible'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>Success!</strong> Otp has sent to your mobile.
						</div>";
				}
			?>
			</div>
			</div>