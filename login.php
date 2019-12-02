<?php
    session_start();
?>
<html>
	<head>
		<title>
			LOGIN 
		</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
			<link rel="stylesheet" href="reg.css">
		<style>
		body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
			.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
			.w3-third img:hover{opacity: 1}
			* {
			box-sizing: border-box;
			}
			
				* {
  box-sizing: border-box;
}
			.col-sm-4  {
			border-radius: 50px;
			background-color: white;
			padding: 30px;
			}
			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
			.col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
				}
			}
		</style>
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
    <body  class="w3-light-grey w3-content" style="max-width:1600px">
		<div class="w3-bar w3-light-grey w3-card" id="myNavbar">
			<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
			 <center><h1>EMPLOYEE LOGIN</h1></center>   
		</div>
	<div class="w3-main" style="margin-left:100px">
		<div class="w3-hide-large" style="margin-top:83px"></div>
		
             
         <div class ="container-fluid" style="padding:7.5% ;padding-left:10%" >
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-4 "  style="padding-top:2.5%">
                            <form action="" method="post">
                                 
                                <div class="form-group">
                                         <label for="ID NO"><b>EMPLOYEE ID NO</label><input type="text"  name="id" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                         <label for="password"><b>PASSWORD</label><input type="password"  id="shwpwd" name="password" class="form-control"  required/>
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
	</div>
        <?php
     
            if(isset($_POST['submit']))
            {
               
                $row=array();
                $id=$_POST['id'];
                $password=$_POST['password'];
				$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
				//$con=mysqli_connect("localhost","root","","test");
                if(!$con)
                {
                    echo"Database connection is not established";
                }
                $query="select * from register where ID='$id' and PASSWORD='$password';";
                $result=mysqli_query($con,$query);
               
                //echo"could not insert data:". mysqli_error($con);
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
                       </script>";
                    
                    
                }
                else{
                    echo"<script>
                        alert('wrong ID or Password');
                    </script>";
                }
            }
         ?>
                               
    </body>
</html>