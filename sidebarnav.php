<?php
$name=$_SESSION['NAME'];
?>


<html>
	<head>
		<!--<title>
			REGISTRATION FORM
		</title>-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="registration.css">

		<style>
		body {font-family: "Lato", sans-serif;}

		.sidebar {
				height: 100%;
				width: 180px;
				position: fixed;
				z-index: 1;
				top: 0;
				left: 0;
				background-color: #111;
				overflow-x: hidden;
				padding-top: 16px;
				}

		.sidebar a {
			padding: 10px 8px 6px 16px;
			text-decoration: none;
			font-size: 20px;
			color: #818181;
			display: block;
			}

		.sidebar a:hover {
			color: #f1f1f1;
			}

		.main {
		margin-left: 160px; /* Same as the width of the sidenav */
			padding: 0px 10px;
		}

		/*@media screen and (max-height: 450px) {
		.sidebar {padding-top: 15px;}
		.sidebar a {font-size: 18px;}
		}*/
		@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
		</style>
</head>
   <body>
	<div class="sidebar">
	<a href="#"><i class="fa fa-fw fa-user"></i>Hello <?php echo $name ?></a>
	<a href="#"><i class="fa fa-fw fa-home"></i> Home</a>
	<a href="dayslimit.php"> <i class="fa fa-fw fa-home"></i>Leave Application </a>
	<a href="employee_leave_statistics.php"><i class="fas fa-chart-pie"></i>Leave Statistics</a>
	<a href="logout.php"><i class="fa fa-fw fa-user"></i>  Logout</a>
	</div>

    </body>
</html>
	<!--<script>
			function func1()
			{
				
				location.href="dayslimit.php";
		
			}
            function func2()
			{
				
				location.href="employee_leave_statistics.php";
		
			}
            function func3()
            {
                location.href="logout.php";
		
            }
		</script>-->