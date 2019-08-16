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
			EMPLOYEE LEAVE LEFT
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
        <center><h4>EMPLOYEE LEAVE STATISTICS</h4></center>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-8" style="padding-top:3.5%;">
                   <h5><b>Employee Name:</b>&nbsp;
                   <?php 
                    $row=array();
                    $con=mysqli_connect("localhost","root","","eleaveform");
                    if(!$con)
                    {
                        echo"Database is not established";
                    }
                    $name=$_SESSION['NAME'];
                    $id=$_SESSION['ID'];
                    $query="select NAME from register where  ID='$id';";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
		            {
			
			        echo"$row[0]";
		            }
                   ?></h5><br>
                   <h5><b> Employee ID:</h5>
                   <?php
                    
                    $row=array();
                    $con=mysqli_connect("localhost","root","","eleaveform");
                    if(!$con)
                    {
                        echo"Database is not established";
                    }
                    $name=$_SESSION['NAME'];
                    $id=$_SESSION['ID'];
                    $query="select ID from register where  ID='$id';";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
		            {
			
			        echo"$row[0]";
		            }
                   ?>                   
                    <br>
                   <h5><b> EMPLOYEE PH.NO:</h5> <?php
                    
                    $row=array();
                    $con=mysqli_connect("localhost","root","","eleaveform");
                    if(!$con)
                    {
                        echo"Database is not established";
                    }
                    $name=$_SESSION['NAME'];
                    $id=$_SESSION['ID'];

                    $query="select 	PHONE_NO from register where ID='$id';";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
		            {
			
			        echo"$row[0]";
		            }
                   ?>           <br>
                   <h5> <b>Leave Taken ON:</h5><?php
                    
                    $row=array();
                    $con=mysqli_connect("localhost","root","","eleaveform");
                    if(!$con)
                    {
                        echo"Database is not established";
                    }
                    $name=$_SESSION['NAME'];
                    $id=$_SESSION['ID'];
                    $phno=$_SESSION['PHNO'];
                    $query="select LEAVE_REQ_ON from leave_application where PHNO='$phno';";
                    $result=mysqli_query($con,$query);
                    
                    //echo"could not insert data:". mysqli_error($con);
                    if((mysqli_num_rows($result))>=1)
                    {
                       // echo"could not insert data:". mysqli_error($con);
                     while($row=mysqli_fetch_array($result))
		                {
			
                             echo"$row[0]";
                             echo"&nbsp;";
                             echo"&nbsp;";
                        
                        }
                    }
                    else{
                        echo"0";
                    }
                   ?>    <br>
                   <h5><b>No. of Days Taken:</h5><?php
                    
                    $row=array();
                    $t=0;
                    $con=mysqli_connect("localhost","root","","eleaveform");
                    if(!$con)
                    {
                        echo"Database is not established";
                    }
                    $name=$_SESSION['NAME'];
                    $id=$_SESSION['ID'];
                    $phno=$_SESSION['PHNO'];

                    $query="select NO_OF_DAYS_RRQUIRED from leave_application where PHNO='$phno';";
                    $result=mysqli_query($con,$query);
                    //echo"could not insert data:". mysqli_error($con);
                    if((mysqli_num_rows($result))>=1)
                    {
                     while($row=mysqli_fetch_array($result))
		                {
			
                             $var=$row[0];
                             $t+=$var;
                             //echo $t;
                             global $n;
                             $n=4;
                             for($i=1;$i<=$t;$i++)
                             {  
                               
                                 
                                 if($n!=0)
                                 {
                                    --$n;
                                     $query1="UPDATE `register` SET `NO_OF_LEAVE_LEFT`='$n' WHERE PHONE_NO='$phno';";
                                    $result1=mysqli_query($con,$query1);
                                    if($n==0)
                                    {
                                         $query2="UPDATE `register` SET `NO_OF_LEAVE_LEFT`='$n' WHERE PHONE_NO='$phno';";
                                    $result1=mysqli_query($con,$query2);
                                    }
                                    
                                   
                                 }
                                
                                
                            }
                        }
                          echo $t;
                    }
                    else{
                        echo"0";
                       
                    }
                   ?> 
                   <h5><b>NO. Of Days Leave Left: </h5>
                   <?php

                    GLOBAL $s;
                    $s=4;
                    $row=array();
                    $con=mysqli_connect("localhost","root","","eleaveform");
                    if(!$con)
                    {
                        echo"Database is not established";
                    }
                    $name=$_SESSION['NAME'];
                    $id=$_SESSION['ID'];
                    $phno=$_SESSION['PHNO'];
                    $query="select 	NO_OF_LEAVE_LEFT from register where PHONE_NO='$phno';";
                    $result=mysqli_query($con,$query);
                    
                    //echo"could not insert data:". mysqli_error($con);
                    if((mysqli_num_rows($result))==1)
                    {
                       // echo"could not insert data:". mysqli_error($con);
                     while($row=mysqli_fetch_array($result))
		                {
			
                            $_SESSION['leaveleft']=$row[0];
                            $leaveleft=$_SESSION['leaveleft'];
                          // echo $leaveleft;
                            $s=$s-$t;
                            
                            echo $s;
                            $query1="UPDATE `register` SET `NO_OF_LEAVE_LEFT`='$s' WHERE PHONE_NO='$phno';";
                            $result1=mysqli_query($con,$query1);
                            //echo"could not insert data:". mysqli_error($con);
                        }
                     
                        //echo $query1;
                       
                    }
                    else{
                        echo"0";
                    }
                   ?>  
                </div>
            </div>
        </div>
    </body>

</html>