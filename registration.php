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
		<link rel="stylesheet" href="registration.css">
		<script>
			function func1()
			{
				
				location.href=".php";
		
			}
		</script>
       
	</head>
    <body style="bg-light">
        
            <center><h4>EMPLOYEE REGISTRATION FORM</h4></center>
            <div class ="container-fluid ">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4 " style="padding-top:1.5%">
                            <form action="" method="post">
                                 <div class="form-group">
                                         <label for="name">NAME:</label><input type="text"  name="name" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                         <label for="ID NO">ID NO:</label><input type="text"  name="id" class="form-control"  required/>
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
                                <div class="form-group">
                                <label for="ph no">PH.NO:</label><input type="number"   name="phno" class="form-control" required />
                                </div>
                                <div class="form-group">
                                <label for="address">ADDRESS:</label><textarea     name="address" class="form-control" required ></textarea>
                                </div>
                                <div class="form-group">
                                <label for="dob">D.O.B:</label><input type="date"    name="dob" class="form-control" required />
                                </div>   
                                <div class="form-group">
                                     <label for="age">AGE:</label><input type="number"    name="age" class="form-control" required/>
                                </div>  
                                <div class="form-group">
                                     <label for="doj">DATE OF JOINING:</label><input type="date"    name="doj" class="form-control"required />
                                </div>   
                                <h5><B>SET PASSWORD</B></h5> 
                                <div class="form-group">
                                     <label for="password">PASSWORD:</label><input type="password"    name="password" class="form-control"required/>
                                </div> 
                                <div class="form-group">
                                     <input type="submit"    name="submit" class="form-control btn btn-danger "/>
                                </div>                            
                            </form>
                    </div>
                </div>
            </div>
    </body>
    <?php
        
         if(isset($_POST['submit']))
         {
             $name=$_POST['name'];
             $id=$_POST['id'];
             $designation=$_POST['designation'];
             $phno=$_POST['phno'];
             $address=$_POST['address'];
             $dob=$_POST['dob'];
             $age=$_POST['age'];
             $doj=$_POST['doj'];
             $password=$_POST['password'];
            $con=mysqli_connect("localhost","root","","eleaveform");
            if(!$con)
            {
                echo"Database is not connected";
            }
            $query="INSERT INTO `register`(`NAME`, `ID`, `DESIGNATION`, `PHONE_NO`, `ADDRESS`, `D.O.B`, `AGE`, `D.O.J`, `PASSWORD`,`NO_OF_LEAVE_LEFT`) VALUES ('$name','$id','$designation','$phno','$address','$dob','$age','$doj','$password','4');";
            $result=mysqli_query($con,$query);
            
            if((is_bool($result)==true))
            {
                echo"<center><h4>You have Registered Successfully</h4></center>";
            }
            else
            {
                echo"<center><h4>please enter your details again</h4></center>";
            }
         }
    ?>
</html>


