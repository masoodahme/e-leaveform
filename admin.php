<?php
    session_start();
	
?>
<html>
   
	<head>
		<title>
			ADMIN LOGIN 
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
	</head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
	  <div class="w3-bar w3-light-grey w3-card" id="myNavbar">
		<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
		 <center><h1>ADMIN LOGIN</h1></center>
		</div>
		 
		<div class="w3-main" style="margin-left:100px">
			<div class="w3-hide-large" style="margin-top:83px"></div>
			  <div class ="container-fluid" style="padding:8.5%;padding-left:12%">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-4 " style="padding-top:4%">
						
                            <form action="" method="post">
                                 
                                <div class="form-group">
                                         <label for="ID NO"><b>ADMIN</label><input type="text"  name="id" class="form-control"  placeholder="ADMIN NAME"  required/>
                                </div>
	
                                <div class="form-group">
                                         <label for="password"><b>PASSWORD</label><input type="password"  id="shwpwd" name="password" class="form-control"  placeholder="PASSWORD"   required/>
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
	 </div>
         <?php
            if(isset($_POST['submit']))
            {
                $id=$_POST['id'];
                $password=$_POST['password'];
                if(($id=="admin")&&($password=="admin"))
                {
                    $_SESSION['NAME']=$id;  
                     echo"<script>
                    location.href='admin1.php';
                </script>";
                }
                else
                {
                    echo"<script>
                        alert('wrong ID or Password');
                    </script>";
                }
            }
         ?>
         
    </body>
</html>