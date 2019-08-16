<html>
	<head>
		<title>
			HOME
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
    </head> 
    <body>
        <center><h4>WELCOME TO AYISHA TECH LIMITED</h4></center>
        <div class="container-fluid " style="padding-top:3.5%;">
            <div class="row">
                <div class="col-sm-4">
                    <button onclick="func0()" class="btn btn-primary">
                        ADMIN
                    </button>
                </div>
                <div class="col-sm-4">
                    <button onclick="func1()" class="btn btn-primary">
                        EMPLOYEE REGISTRATION
                    </button>
                </div>
                <div>
                    <button onclick="func2()" class="btn btn-primary">
                      EMPLOYEE  LEAVE FORM SUBMISSION
                    </button>
                    <!--<button onclick="func3()" class="btn btn-primary">
                        EMPLOYEE LEAVE LEFT
                    </button>-->
                </div>
            </div>
        </div>
    </body>
</html>