<?php
	session_start();
	$name=$_SESSION['NAME'];
	if(!(isset($_SESSION['NAME'])))
	{
		echo"<script>location.href='admin.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			ADMIN
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
		<style>
			body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
			.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
			.w3-third img:hover{opacity: 1}
			hr {
			border: 1px solid black;
			margin-bottom: 25px;
			}
			table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
			//border: 1px solid black ;
			}
			.padding{
			padding-left: 240px;
			}
			th, td {
			text-align: left;
			padding: 8px;
			}
			tr:nth-child(even){background-color: white}
			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
			.col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
				}
			}
		</style>
	</head>
	
		<script>
// Script to open and close sidebar
	function w3_open() {
	document.getElementById("mySidebar").style.display = "block";
	document.getElementById("myOverlay").style.display = "block";
	}
	function w3_close() {
	document.getElementById("mySidebar").style.display = "none";
	document.getElementById("myOverlay").style.display = "none";
	}
// Modal Image Gallery
	function onClick(element) {
	document.getElementById("img01").src = element.src;
	document.getElementById("modal01").style.display = "block";
	var captionText = document.getElementById("caption");
	captionText.innerHTML = element.alt;
	}

</script>
  <body class="w3-light-grey w3-content" style="max-width:1600px">
  <!-- Sidebar/menu -->
	<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <!--<h3 class="w3-padding-64 w3-center"><b>SOME<br>NAME</b></h3>-->
	<i class="fas fa-user-cog fa-10x"></i>
	<br>
	<br>
  
	<h3 class="w3-padding-12 "><?php echo $name ?></h3>
	<br>
	<a href="logout1.php"  class="w3-bar-item w3-button" style="text-decoration:none"><i class="fas fa-sign-out-alt"></i> <h5> Logout</h5></a>
	<a href="javascript:void(0)" onclick="w3_close()"  style="text-decoration:none" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
	</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">	<!--<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>-->MENU</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



   <div class="w3-main" style="margin-left:300px">
			<div class="w3-hide-large" style="margin-top:83px"></div>
				<!--<div class="w3-bar w3-light-grey w3-card" id="myNavbar">
						<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
					   <center><h1></h1></center>
				</div>-->
		<form action="" method="post">
		<!--<input type='submit' class='btn btn-primary' style='float:right;'  value='logout' name='logout'/>	-->
				
            <div class="container">
				<br>
				<div class="row">
						<div class="col-sm-4">
							<label><H4>NAME:</H4></label><input type="text" class="form-control"  name="inputname"/>
						</div>
						<div  class="col-sm-4">
						</div>
						<div class="col-sm-4">
						<label><H4>DATE:</H4></label><input type="date" class="form-control"  name="inputdate"/>
						<br>
						</div>
				</div>
				<div class="row">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-2">
						<input type="submit" class="form-control" value="select" name="selectdate"/>
						</div>
						<div class="col-sm-2">
						<input type="submit" class="form-control" value="select all" name="selectallbydate"/>
						</div>
						
				</div>

			</div>
		</form>
		<hr>
	<table class="table table-bordered table-hover table-responsive">  
			
			<tr>
			<th>
				NAME OF EMPLOYEE
			</th>
			<th>
                EMPLOYEE ID
			</th>
			<th>
				DESIGNATION
			</th>
			<th>
				LEAVE REQUIRED FROM
			</th>
			<th>
				LEAVE REQUIRED TO
			</th>
			<th>
				NO OF DAYS REQUIRED
			</th>
			<th>
				REASON
			</th>
			<th>
				PHNO
			</th>
			<th>
				ADDRESS
			</th>
			<th>
			SUBMISSION DATE
			</th>
			</tr> 

				  
	<?php
		if(isset($_POST['selectdate']))
		{
			$row=array();
			$inputname=$_POST['inputname'];
			$inputdate=$_POST['inputdate'];
			$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
			//$con=mysqli_connect("localhost","root","","test");
			
			if(!$con)
			{
				echo "Database is not connected";
			}
			//$query="select `NAME_OF_EMPLOYEE`, `EMPLOYEE_ID`, `DESIGNATION`, `LEAVE_REQ_ON`,`NO_OF_DAYS_RRQUIRED`, `REASON`, `PHNO`, `ADDRESS`, `date` from leave_application where date='$inputdate' or NAME_OF_EMPLOYEE='$inputname'  ;";
		//	$query="select `NAME_OF_EMPLOYEE`, `EMPLOYEE_ID`, `DESIGNATION`, `LEAVE_REQ_ON`,`NO_OF_DAYS_RRQUIRED`, `REASON`, `PHNO`, `ADDRESS`, `date` from leave_application where (date='$inputdate' and date!='') or (NAME_OF_EMPLOYEE='$inputname' and NAME_OF_EMPLOYEE!='') ;";
			$query="SELECT `NAME_OF_EMPLOYEE`, `EMPLOYEE_ID`, `DESIGNATION`, `LEAVE_REQ_FROM`,`LEAVE_REQ_TO`, `NO_OF_DAYS_RRQUIRED`, `REASON`, `PHNO`, `ADDRESS`, `date` FROM `leave_application`  WHERE (date='$inputdate' and date!='') or (NAME_OF_EMPLOYEE='$inputname' and NAME_OF_EMPLOYEE!='') ;";
			$result=mysqli_query($con,$query);
			//echo"could not select". mysqli_error($con);
//	if((($inputname!='')||($inputdate!='')))
	if(($inputname !='')||($inputdate !='')) 
	{
	       
	       if(mysqli_num_rows($result) > 0)
		   {
			   
			/*
			
			echo"<table align=center border=2px>";
			echo"<tr>";
			echo"<th>NAME_OF_EMPLOYEE</th>";
			echo"<th>EMPLOYEE_ID</th>";
			echo"<th>DESIGNATION</th>";
			echo"<th>LEAVE_REQ_FROM</th>";
			echo"<th>LEAVE_REQ_TO</th>";
			echo"<th>NO_OF_DAYS_RRQUIRED</th>";
			echo"<th>REASON</th>";
			echo"<th>PHNO</th>";
			echo"<th>ADDRESS</th>";
			echo"<th>SUBMISSION DATE</th>";
			echo"</tr>";*/
			while($row=mysqli_fetch_array($result))
			{
			
			echo"<tr>";
			echo"<td>$row[0]</td>";
			echo"<td>$row[1]</td>";
			echo"<td>$row[2]</td>";
			echo"<td>$row[3]</td>";
			echo"<td>$row[4]</td>";
			echo"<td>$row[5]</td>";
			echo"<td>$row[6]</td>";
			echo"<td>$row[7]</td>";
			echo"<td>$row[8]</td>";
			echo"<td>$row[9]</td>";
			echo"</tr>";
			}
			
			echo"</table>";
		
	        }
	        else{
	            echo"<center><strong>Sorry there is no such Record in the  Database</strong></center>";
	        }
	}
		else{
			echo"<center><strong>please enter the details</strong></center>";
		}
		
	}
			
	?>
	
	<?php
		if(isset($_POST['selectallbydate']))
		{
			$row=array();
			$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
			//$con=mysqli_connect("localhost","root","","test");
			if(!$con)
			{
				echo"Database is not established";
			}
			//$query="select * from leave_application ";
			$query="SELECT `NAME_OF_EMPLOYEE`, `EMPLOYEE_ID`, `DESIGNATION`, `LEAVE_REQ_FROM`,`LEAVE_REQ_TO`, `NO_OF_DAYS_RRQUIRED`, `REASON`, `PHNO`, `ADDRESS`, `date` FROM `leave_application`;";
			$result=mysqli_query($con,$query);
			if(mysqli_num_rows($result) > 0)
			{
		/*
			echo"<table align=center border=1px >";
			echo"<tr>";
			echo"<th>NAME_OF_EMPLOYEE</th>";
			echo"<th>EMPLOYEE_ID</th>";
			echo"<th>DESIGNATION</th>";
			echo"<th>LEAVE_REQ_FROM</th>";
			echo"<th>LEAVE_REQ_TO</th>";
			echo"<th>NO_OF_DAYS_RRQUIRED</th>";
			echo"<th>REASON</th>";
			echo"<th>PHNO</th>";
			echo"<th>ADDRESS</th>";
			echo"<th>SUBMISSION DATE</th>";
			echo"</tr>";	*/	
			while($row=mysqli_fetch_array($result))
			{
				echo"<tr>";
				echo"<td>$row[0]</td>";
				echo"<td>$row[1]</td>";
				echo"<td>$row[2]</td>";
				echo"<td>$row[3]</td>";
				echo"<td>$row[4]</td>";
				echo"<td>$row[5]</td>";
				echo"<td>$row[6]</td>";
				echo"<td>$row[7]</td>";
				echo"<td>$row[8]</td>";
				echo"<td>$row[9]</td>";
				echo"</tr>";
			}
			echo "</table>";

			echo"<center><h4>List of all students Leave details</h4></center>";
			}
			else
			{
			   	echo"<center><strong>There is no records in the Database</strong></center>";
			}
			
		}
	?>
	 </table>
	<?php
		/*if(isset($_POST['logout']))
		{
			
			session_destroy();
			echo"<script>location.href='index.php'</script>";
		}*/
	?>
	
</div>
    </body>

</html>