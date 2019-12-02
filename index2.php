<html>
	<head>
			<title>
				HOME
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
		<link rel="stylesheet" href="registration.css">
        <script>
             function func0()
            {
                location.href="admin.php";
            }
            function func1()
            {
                location.href="registration.php";
            }
            function func2()
            {
                location.href="login.php";
            }
          /*  function func3()
            {
                location.href="leaveleft.php";
            }*/
        </script>
		<style>
		body, html {
		height: 100%;
		margin: 0;
		font-family: Arial, Helvetica, sans-serif;
		}
		.hero-image {
		background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("cover1.png");
		height: 42%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
		}
		

			@media screen and (max-width: 600px) {
			.container {
			width: 100%;
			margin-top: 0;
				}
			}
		
		</style>
    </head> 
    <body class="w3-light-grey w3-content" style="max-width:1600px">		
	<div class="w3-main" style="margin-left:0px">
	  <div class="w3-hide-large" style="margin-top:23px"></div>
			<div class="hero-image">
			</div>
        <!--<center><h4>WELCOME TO AYISHA TECH LIMITED</h4></center>-->
        <div class="container" >
            <div class="row">
                <div class="col-sm-3">
                     <button onclick="func0()" class="btn btn-primary">
                        ADMIN
                    </button>
                </div>
                <div class="col-sm-4">
                    <button onclick="func1()" class="btn btn-primary">
                        EMPLOYEE REGISTRATION
                    </button>
                </div>
                <div class="col-sm-4">
                    <button onclick="func2()" class="btn btn-primary">
                      EMPLOYEE  LEAVE FORM SUBMISSION
                    </button>
                    <!--<button onclick="func3()" class="btn btn-primary">
                        EMPLOYEE LEAVE LEFT
                    </button>-->
                </div>
            </div>
        </div>
      </div>
	</div>
    </body>
</html>