<?php
    session_start();
    if(!(isset($_SESSION['NAME'])))
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
		<style>
			* {
  box-sizing: border-box;
}
			.col-sm-4  {
			border-radius: 40px;
			background-color: white;
			padding: 20px;
			}
			input[type=submit] 	
			{
				width: 100%;
				background-color: #4CAF50;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}
			hr {
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
			}
		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
			.col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
			}
		}
		</style>
    </head> 
    <body>
			<?php include('sidebarnav2.php');?>
		<div class="w3-main" style="margin-left:300px">
			<div class="w3-hide-large" style="margin-top:83px"></div>
				<div class="w3-bar w3-light-grey w3-card" id="myNavbar">
					<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
					<center><H1>OTP VERIFICATION</H1></center>
				</div>
			<div class="container" style="padding:3.5%;padding-top:9.5%;padding-left:6%">
			
                <div class="row">
                <div class="col-sm-3">
                </div>
				
                    <div class="col-sm-4" >
					<!--<div class="card">
				<div class="card-body">-->
                        <form name="form1" method="post">
                            <div class="form-group">
                                
                               <input type="submit" name='submit' class="btn  form-control" value="SEND OTP"/>
                            </div>
                        </form>
                               
                        <form name="form2"  method="post">
                                 <div class="form-group">
                                     <label class="for otp"><strong>ENTER OTP:</strong></label><input type="password" name="verify" class="form-control"/>
                                     <br>
                                     <input type="submit" name='sub1' class="btn  form-control" value="VERIFY"/>
                                </div>
                        </form>
                    </div>
                </div>
           </div>
		   </div>
		  <!-- </div>
		  </div>-->
           <br>
           <br>
           <?php
                if(isset($_POST['submit']))
                {
                    include("sendotp.php");
					
                }
			?>
			<?php 
                if(isset($_POST['sub1']))
                {
                    $verify=$_POST['verify'];
					$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
					//$con=mysqli_connect("localhost","root","","test");
                    if(!$con)
                    {
                        echo"Database connection is not established";
                    }                    
                    $query="select 'otp' from otp where otp='$verify';";
                    $result=mysqli_query($con,$query);
                    if(mysqli_num_rows($result)==1)
                    {
                        $query1="delete  from otp where otp='$verify';";
                        $result1=mysqli_query($con,$query1);
                       // echo"could not delete".mysqli_error($con);
                        echo"<script>
                            location.href='leaveform.php';
                        </script>";

                    }
					exit();
                }
           ?>
    </body>
</html>