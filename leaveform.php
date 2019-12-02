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
            LEAVE FORM
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="registration.css">
        <script>
            form2.submit();
        </script>
		<style>
		hr {
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
			}
		* {
				box-sizing: border-box;
			}
			.container {
			border-radius: 50px;
			background-color: white;
			padding: 5px;
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
	<?php include('designation.php'); ?>
	<div class="w3-main" style="margin-left:300px">
		<div class="w3-hide-large" style="margin-top:83px"></div>
				<div class="w3-bar w3-light-grey w3-card" id="myNavbar">
					<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
					 <center><h1>LEAVE APPLICATION PROFORMA</h1></center>
				</div>
            <div class ="container" style="padding:2.5%">

                <div class="row">
                  
			
                    <div class="col-sm-12 " style="padding-top:2.5%">
					
						<form action="" method="post" class="was-validated">
                            
								
                                 <div class="form-group">
                                         <label for="name"><strong> Name of the employee:</h3></label><!--<input type="text"  name="name" class="form-control" required/>-->
										 <input type="text"  name="name" class="form-control" value=" <?php
											$name=$_SESSION['NAME'];
											echo $name;
										 ?>"
										 disabled/>
										
                                </div>
                                <div class="form-group">
                                         <label for="ID NO">Employee ID:</label><!--<input type="text"  name="id" class="form-control"  required/>-->
										  <input type="text"  name="name" class="form-control" value=" <?php
											$id=$_SESSION['ID'];
											echo $id;
										 ?>"
										 disabled/>
										 <?php
										//	$id=$_SESSION['ID'];
											//echo $id;
										 ?>
                                </div>
                                <div class="form-group">
                                         <label for="DESIGNATION">DESIGNATION:</label>
										  <input type="text"  name="name" class="form-control" value=" <?php
											$designation=$_SESSION['desig'];
											 echo $designation;
										 ?>"
										 disabled/>
										 <?php
											// $designation=$_SESSION['desig'];
											 //echo $designation;
										 ?>
                                </div>
								<div class="form-group">
                                <label for="ph no">PH.NO:</label><!--<input type="number"   name="phno" class="form-control" required />-->
								 <input type="text"  name="name" class="form-control" value=" <?php
											$phno=$_SESSION['PHNO'];
											echo $phno;
										 ?>"
										 disabled/>
								<?php
								//	$phno=$_SESSION['PHNO'];
								//	echo $phno;
								?>
                                </div>
								<div class='form-group'>
								<label for="date">DATE:</label>
								<input type='date'   name='leave_required_on' class='form-control' required/>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
								</div>
                                <div class="form-group">
                                <label for="reason">Reason:</label><textarea type="text"   name="reason" class="form-control" required ></textarea>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                <label for="address">ADDRESS:</label><textarea     name="address" class="form-control" required ></textarea>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                        <label for="name"><strong>SUBMISSION DATE:</label>
										 <input type="text"  name="name" class="form-control" value=" <?php
											  date_default_timezone_set('Asia/Kolkata');
											$date1= date("Y-m-d"); 
											echo $date1;
										 ?>"
										 disabled/>
									   <?php
									  // date_default_timezone_set('Asia/Kolkata');
									   //$date1= date("Y-m-d"); 
									   //echo $date1;
									   ?>
                                </div>
                                <div class="form-group">
                                    <input type="submit"    name="submit" class="form-control btn btn-success "/>
                                </div>                            
                            </form>
							
                        </div>         
                    
                </div>
            </div>
		</div>
	
	
            <?php
                 if(isset($_POST['submit']))
                  {
                      //$name=$_POST['name'];
                     // $id=$_POST['id'];
                     // $designation=$_POST['designation'];
                     // $leave_required_on=$_POST['leave_required_on'];
                     // $no_of_days_required=$_POST['no_of_days_required'];
					  $days=$_SESSION['days'];
                      $reason=$_POST['reason'];
                      //$phno=$_POST['phno'];
                      $address=$_POST['address'];
                      //$date= $_POST['leave_required_on'];
                      $datefrom= $_POST['leave_required_on'];
					  
                       //$date1=$_POST['date1'];
                     //$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
					 if($days==1)
					 {
						$dateto=$_POST['leave_required_on'];
					 }
					 else
					{
						$date=date_create($datefrom);
						$str=strval($days);
						date_add($date,date_interval_create_from_date_string(($str."days")));
						$dateto= date_format($date,"Y-m-d");
					}
					//$con=mysqli_connect("localhost","root","","test");	
					$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
                    if(!$con)
                    {
                        echo"Database is not connected";
                    }
					
                    //$query="INSERT INTO `leave_application`(`NAME_OF_EMPLOYEE`, `EMPLOYEE_ID`, `DESIGNATION`,  `REASON`, `PHNO`, `ADDRESS`) VALUES ('$name','  $id',' $designation','$reason',' $phno',' $address');";
                //  $query="UPDATE `leave_application` SET `NAME_OF_EMPLOYEE`='$name',`EMPLOYEE_ID`='$id',`DESIGNATION`='$designation','LEAVE_REQ_ON'='$date',`REASON`='$reason',`PHNO`='$phno',`ADDRESS`='$address',`date`='$date1' ;";
				$query="INSERT INTO `leave_application`(`NAME_OF_EMPLOYEE`, `EMPLOYEE_ID`, `DESIGNATION`, `LEAVE_REQ_FROM`, `NO_OF_DAYS_RRQUIRED`, `REASON`, `PHNO`, `ADDRESS`, `date`,`LEAVE_REQ_TO`) VALUES ('$name','$id','$designation','$datefrom','$days','$reason','$phno','$address','$date1','$dateto');";
                 // echo $query;
                    $result=mysqli_query($con,$query); 
                 //  echo "could not insert".mysqli_error($con).mysqli_errno($con);
                    if(is_bool($result)==false)
                    {
                        echo"<center><h4>Please Re-enter the details again</h4></center>";
                    }
                    else
					{
						echo"<script>alert('submitted successfully')</script>";
                        echo"<script>location.href='employee_choice.php'</script>";
                    }
                    
                  }
             ?>
    </body>

</html>
