<html>
	<head>
		<title>
			LOGIN 
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
			
            function shw()
			{
				
                var x=document.getElementById('shwpwd').type;
                if(x=="text")
                {
                    document.getElementById('shwpwd').type="password";
                }
                else
                {
                    document.getElementById('shwpwd').type="text";
                }
		
			}
		</script>
       
	</head>
    <body>
         <center><h4>ADMIN LOGIN</h4></center>       
         <div class ="container-fluid ">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4 " style="padding-top:10%">
                            <form action="" method="post">
                                 
                                <div class="form-group">
                                         <label for="ID NO"><b>ADMIN:</label><input type="text"  name="id" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                         <label for="password"><b>PASSWORD:</label><input type="password"  id="shwpwd" name="password" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                         <input type="checkbox"   onclick="shw()"/><label for="password"><b> &nbsp;SHOW PASSWORD</label>
                                </div>
                                <div class="form-group">
                                         <input type="submit"  name="submit" class="form-control btn btn-primary" required/>
                                </div>
                            </form>
                    </div>
                </div>
        </div>
        <?php
     
            if(isset($_POST['submit']))
            {
                $row=array();
                session_start();
                $id=$_POST['id'];
                $password=$_POST['password'];
                if(($id=="admin")&&($password="admin"))
                {
                    $_SESSION['NAME']=$id;  
                    echo"<script>
                    location.href='employee_choice.php';
                </script>";//this url need to change by tomorrow
                }
               /* $con=mysqli_connect("localhost","root","","eleaveform");
                if(!$con)
                {
                    echo"Database connection is not established";
                }
                $query="select * from register where ID='$id' and PASSWORD='$password';";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result)==1)
                {
                    $row=mysqli_fetch_array($result);
                    $_SESSION['NAME']=$row[0];
                    $_SESSION['ID']=$row[1]; 
                    $_SESSION['PHNO']=$row[3];
                    $name=$_SESSION['NAME'];
                    //echo $_SESSION['PHNO'];
                     //echo $_SESSION['mail'];
                    // echo"could not insert data:". mysqli_error($con);
                     
                       echo"<script>
                            location.href='employee_choice.php';
                        </script>";//this url need to change by tomorrow
                    
                    
            }*/
                else{
                    echo"<script>
                        alert('wrong ID or Password');
                    </script>";
                }
            }
         ?>
                               
    </body>
</html>