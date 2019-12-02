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
            Days Limit
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
			<style>
		* {
  box-sizing: border-box;
}
			.col-sm-4  {
			border-radius: 50px;
			background-color: white;
			padding: 20px;
			}
			hr {
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
			}
        input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
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
	<?php include('sidebarnav2.php'); ?>
   		
	<div class="w3-main" style="margin-left:300px">
		<div class="w3-hide-large" style="margin-top:83px"></div>
			<div class="w3-bar w3-light-grey w3-card" id="myNavbar">
				<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
				<center><h1>LEAVE APPLICATION PROFORMA</h1></center> 
			</div>
         <div class ="container " style="padding:5.5%;padding-top:9.5% ">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                  <div class="col-sm-4 " style="padding-top:6.5%">
					<!--<div class="card">
						<div class="card-body">-->
                            <form name='form2' action='' method='post' >
                               <div class="form-group">
                                <label for="no_of_days_required"><b>&nbsp No of days required:</label><input type="number"   name="no_of_days_required" class="form-control"  />
                                <br>
                                <input type="submit"   name="sub" class="form-control btn btn-primary" required />
                               
                                
                                        
                                </div>
							</div>
						</div>
                                <br>  
                             </form>
                 <!--   </div>
                </div>-->
            </div>
			 <?php
                                 
                                global $days;

                                        if(isset($_POST['sub']))
                                        {    
                                            $days=$_POST['no_of_days_required'];
                                            $_SESSION['days']=$days;
                                            $d= $_SESSION['days'];
                                            $ID= $_SESSION['ID'];
                                            $name=$_SESSION['NAME'];
                                            //echo $name;
                                            $phno=$_SESSION['PHNO'];
                                            $leave_required_on;
                                           // $row=array();
										
										  include('leaveleft.php');
										    $exceedinglimit=4;
											if(($days > $leaveleft) || ($days==$exceedinglimit))
                                            {
                                               
                                                echo"<script>
                                                        alert('You are exceeding the limit of taking leave');
                                                    </script>";
                                                
                                                goto end1;
                                            }
											elseif($days)
											{
												echo"<script>location.href='otp.php';</script>";
											}
											
                                            
                                         } 
                                           end1:
                                        ?>
		</div>
		
        
    </body>

</html>
