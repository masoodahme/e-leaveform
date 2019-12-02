
<?php
						$id=$_SESSION['ID'];
					   // $con=mysqli_connect("localhost","root","","test");
						$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
						if(!$con)
						{
							echo"Database not established";
						}
						
						$query="SELECT  `DESIGNATION` FROM `register` WHERE `ID`='$id';";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_array($result);
						$_SESSION['desig']=$row[0];
	?>