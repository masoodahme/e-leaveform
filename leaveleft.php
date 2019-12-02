  <?php


                    $row=array();
					$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
				   //$con=mysqli_connect("localhost","root","","test");
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

                        }
                     
                        //echo $query1;
                       
                    }
                    
                   ?> 
				   