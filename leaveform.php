<?php
    session_start();
    if(!isset($_SESSION['NAME']))
    {
        echo"<script>location.href='login.php'</script>";
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
    </head> 
    <body>
    <center><h4>LEAVE APPLICATION PROFORMA</h4></center>
            <div class ="container-fluid ">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4 " style="padding-top:1.5%">
                            <form action="" method="post">
                                
                                 <div class="form-group">
                                         <label for="name"><b>Name of the employee:</label><input type="text"  name="name" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                         <label for="ID NO">Employee ID:</label><input type="text"  name="id" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                         <label for="DESIGNATION">DESIGNATION:</label><!--<input type="number"  name="id" class="form-control" />-->
                                         <select class="form-control" name="designation"  >
                                            <option value="software developement">
                                                SOFTWARE DEVELOPEMENT
                                            </option>
                                            <option value="web developement">
                                                WEB DEVELOPEMENT
                                            </option>
                                            <option value="app developement">
                                                MOBILE APP DEVELOPEMENT
                                            </option>
                                            <option value="data science engineer">
                                               DATA SCIENCE ENGINEER
                                            </option>
                                         </select>
                                </div>
                               <!-- <div class="form-group">
                                <label for="leave_required_on">Leave required on:</label><input type="date"   name="leave_required_on" class="form-control" required />
                                </div>-->
                                <div class="form-group">
                                <label for="reason">Reason:</label><textarea type="text"   name="reason" class="form-control" required ></textarea>
                                </div>
                                <div class="form-group">
                                <label for="ph no">PH.NO:</label><input type="number"   name="phno" class="form-control" required />
                                </div>
                                <div class="form-group">
                                <label for="address">ADDRESS:</label><textarea     name="address" class="form-control" required ></textarea>
                                <div class="form-group">
                                         <label for="name"><b>DATE OF SUBMITTING THE LEAVEFORM:</label><input type="date"  name="date1" class="form-control" required/>
                                </div>
                                
                                <div class="form-group">
                                     <input type="submit"    name="submit" class="form-control btn btn-danger "/>
                                </div>                            
                            </form>
                            <!--<form name='form2' action='' method='post'>
                                <div class="form-group">
                                <label for="no_of_days_required">No of days required:</label><input type="number"   name="no_of_days_required" class="form-control" required />
                                <input type="submit"   name="sub" class="form-control" required />
                                </div>
                                    <?php
                                      /*  if(isset($_POST['sub']))
                                        {
                                            $days=$_POST['no_of_days_required'];
                                            $con=mysqli_connect("localhost","root","","eleaveform");
                                            if(!$con)
                                            {
                                                echo"Database is not established";
                                           }

                                            if($days<4)
                                            {
                                                $query="insert into 'leave_application'(`LEAVE_REQ_ON`, `NO_OF_DAYS_RRQUIRED`) values('$leave_required_on','$days') where PHNO='$phno';";
                                                $result=mysqli_query($con,$query);   
                                                echo"<label for='leave_required_on'>Leave required on:</label>";
                                                 for($i=1;$i<=$days;$i++)
                                                {
                                                    echo"<div class='form-group'>";
                                                    echo"<input type='date'   name='leave_required_on' class='form-control'/>";
                        
                                                    echo"</div>";
                                                }
                                               // if(isset($_POST['no_of_days_required']))
                                               // {
                                                    
                                                    
                                                   
                                                    $query="insert into 'leave_application'(`NO_OF_DAYS_RRQUIRED`) values('$days');";
                                                    $result=mysqli_query($con,$query);
                                               // }   
                                             }
                                            else
                                            {
                                                echo"<CENTER><B><H4>You are not Allowed to Take more than Three Days at a Time</H4>";
                                            }
                                        }*/
                                    ?>
                                </form>-->
                    </div>
                </div>
            </div>
            <?php
                 if(isset($_POST['submit']))
                  {
                      $name=$_POST['name'];
                      $id=$_POST['id'];
                      $designation=$_POST['designation'];
                     // $leave_required_on=$_POST['leave_required_on'];
                     // $no_of_days_required=$_POST['no_of_days_required'];
                      $reason=$_POST['reason'];
                      $phno=$_POST['phno'];
                      $address=$_POST['address'];
                      $date= $_SESSION['date'];
                      $date1=$_POST['date1'];
                    $con=mysqli_connect("localhost","root","","eleaveform");
                    if(!$con)
                    {
                        echo"Database is not connected";
                    }
                    //$query="INSERT INTO `leave_application`(`NAME_OF_EMPLOYEE`, `EMPLOYEE_ID`, `DESIGNATION`,  `REASON`, `PHNO`, `ADDRESS`) VALUES ('$name','  $id',' $designation','$reason',' $phno',' $address');";
                    $query="UPDATE `leave_application` SET `NAME_OF_EMPLOYEE`='$name',`EMPLOYEE_ID`='$id',`DESIGNATION`='$designation',`REASON`='$reason',`PHNO`='$phno',`ADDRESS`='$address',`date`='$date1' WHERE LEAVE_REQ_ON='$date';";
                    $result=mysqli_query($con,$query); 
                    echo "could not insert".mysqli_error($con);
                    if(is_bool($result)==false)
                    {
                        echo"<center><h4>Please Re-enter the details again</h4></center>";
                    }
                    else{

                       // echo"<center><h4>you have submited your leave form successfully</h4></center>";
                        //echo"<script>alert('submitted successfully')</script>";
                     // echo"<script>location.href='employee_choice.php'</script>";
                    }
                  }
             ?>
    </body>

</html>
