<?php
    session_start();
    if(!(isset($_SESSION['NAME'])))
    {
        echo"<script>location.href='login.php'</script>";
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
        <script>
           /* function func1()
            {
                location.href="registration.php";
               var form1=document.getElementById("id1");
               form1.submit();
            }
            function func2()
            {
                //location.href="login.php";
                document.forms("form2").submit()
            }*/
        </script>
    </head> 
    <body>
           <div class="container-fluid">
                <div class="row">
                <div class="col-sm-4">
                </div>
                    <div class="col-sm-4">
                        <form name="form1" method="post">
                            <div class="form-group">
                                <center><H4>OTP VERIFICATION</H4></center>
                               <input type="submit" name='sub' class="btn btn-primary form-control" value="SEND OTP"/>
                            </div>
                        </form>
                               
                        <form name="form2"  method="post">
                                 <div class="form-group">
                                     <label class="text-primary">ENTER OTP:</label><input type="password" name="verify" class="form-control"/>
                                     <br>
                                     <input type="submit" name='sub1' class="btn btn-primary form-control" value="VERIFY"/>
                                </div>
                        </form>
                    </div>
                </div>
           </div>
           <br>
           <br>
           <?php
                if(isset($_POST['sub']))
                {
                    include("sendotp.php");
                    //echo"<center><h4>OTP HAVE SEND TO YOUR MOBILE SUCCESSFULLY</center>";
                }
                if(isset($_POST['sub1']))
                {
                    $verify=$_POST['verify'];
                    $con=mysqli_connect("localhost","root","","eleaveform");
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
                }
           ?>
    </body>
</html>