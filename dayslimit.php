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
        <script>   
        </script>
    </head> 
    <body>
    <center><h4>LEAVE APPLICATION PROFORMA</h4></center>
            <div class ="container-fluid ">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4 " style="padding-top:1.5%">
                          
                            <form name='form2' action='' method='post'>
                                <div class="form-group">
                                <label for="no_of_days_required"><b>No of days required:</label><input type="number"   name="no_of_days_required" class="form-control"  />
                                <br>
                                <input type="submit"   name="sub" class="form-control btn btn-primary" required />
                                <?php
                                 
                                global $days;

                                        if(isset($_POST['sub']))
                                        {    
                                            $days=$_POST['no_of_days_required'];
                                            $_SESSION['days']=$days;
                                            $d= $_SESSION['days'];
                                            $ID= $_SESSION['ID'];
                                            $name=$_SESSION['NAME'];
                                            $phno=$_SESSION['PHNO'];
                                            $leaveleft=$_SESSION['leaveleft'];
                                            $leave_required_on;
                                            $row=array();
                                           if($d>$leaveleft)
                                            {
                                               
                                                echo"<script>
                                                        alert('You are exceeding the limit of taking leave');
                                                    </script>";
                                                
                                                goto end1;
                                            }
                                            $con=mysqli_connect("localhost","root","","eleaveform");
                                            if(!$con)
                                            {
                                                echo"Database is not established";
                                            }
                                            $query3="INSERT INTO `days`(`day`, `NAME`) VALUES ('$d','$name');";
                                            $result3=mysqli_query($con,$query3);
                                            $query4="SELECT `day`, `NAME` FROM `days` WHERE day='$d';";
                                            $result4=mysqli_query($con,$query4);
                                            $query5="select NO_OF_LEAVE_LEFT from register where PHONE_NO='$phno';";
                                            $result5=mysqli_query($con,$query5);
                                            //echo"could not select".mysqli_error($con);
                                            if((mysqli_num_rows($result5))==1)
                                            {
                                                
                                                $row=mysqli_fetch_array($result5);
                                                $check=$row[0];
                                                //echo $check;
                                                if($check==0)
                                                {
                                                 
                                                   echo"<script>
                                                        alert('You have exceeded the no of days leave left limit');
                                                    </script>";
                                                    echo"<script>
                                                        location.href='employee_choice.php';
                                                    </script>";
                                                }
                                                else
                                                {
                                                  
                                                     goto end;
                                                }
                                            }
                                            end:
                                           
                                            if($d < 4)
                                            {
                                                echo"<label for='leave_required_on'>Leave required on:</label>";
                                                 for($i=1;$i<=$days;$i++)
                                                {
                                                    echo"<div class='form-group'>";
                                                    echo"<input type='date'   name='leave_required_on' class='form-control'/>";
                                                    echo"<br>";
                                                }
                                                    echo "<input type='submit'   name='submit' class='form-control'/>";
                                                    echo"</div>";  
                                                
                                            
                                             }
                                                else
                                                {
                                                    echo"<CENTER><B><H4>You are not Allowed to Take more than Three Days at a Time</H4>";
                                                }
                                            
                                            } 
                                           end1:
                                        ?>
                                        
                                </div>

                                    <?php  
                                        $con=mysqli_connect("localhost","root","","eleaveform");
                                     
                                       
                                     if(isset($_POST['submit']))
                                     {   
                                       
                                       
                                            if(isset($_POST['leave_required_on']))
                                             {
                                                   
                                                $leave_required=$_POST['leave_required_on'];
                                                $_SESSION['date']=$leave_required;
                                                $query4="SELECT `day` FROM `days`;";
                                                $result4=mysqli_query($con,$query4);
                                                if(mysqli_num_rows($result4)>=1)
                                                {
                                                    $row=mysqli_fetch_array($result4);
                                                    $_SESSION['da']=$row[0]; 
                                                }
                                                $da=$_SESSION['da'];
                                                $date= $_SESSION['date'];
                                                $query1="INSERT INTO `leave_application`( `LEAVE_REQ_ON`,`NO_OF_DAYS_RRQUIRED`) VALUES ('$leave_required','$da');";
                                                $result1=mysqli_query($con,$query1);  
                                               echo"
                                                <script>
                                                   // location.href='leaveform.php';
                                                   location.href='otp.php';
                                                </script>";
                                           
                                              }  
                                    }
                                    ?>
                                <br>
                                
                                  
                                </form>
                    </div>
                </div>
            </div>
         
    </body>

</html>
