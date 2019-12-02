<html>
	<head>
		<title>
			REGISTRATION FORM
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
			.container {
			border-radius: 47px;
			background-color: white;
			padding: 5px;
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
				
                var x=document.getElementById('psw').type;
                if(x=="text")
                {
                    document.getElementById('psw').type="password";
                }
                else
                {
                    document.getElementById('psw').type="text";
                }
		
			}
		</script>
	</head>
	
    <body  class="w3-light-grey w3-content" style="max-width:1600px">
		<div class="w3-bar w3-light-grey w3-card" id="myNavbar">
			<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
			 <center><h1>EMPLOYEE REGISTRATION FORM</h1></center>
		</div>
      <div class="w3-main" style="margin-left:100px">
		<div class="w3-hide-large" style="margin-top:0px"></div>
           
            <div class ="container">
                <div class="row">
                   
                    <div class="col-sm-12 " style="padding-top:1.5%">
					
                            <form action="" method="post" >
                                 <div class="form-group">
                                         <label for="name"><Strong>NAME</strong></label><input type="text"  name="name" class="form-control was-validated" required/>
										 <div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                         <label for="ID NO"><Strong>ID NO</label><input type="text"  name="id" class="form-control  was-validated"  required/>
										 <div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                         <label for="DESIGNATION"><Strong>DESIGNATION</label><!--<input type="number"  name="id" class="form-control" />-->
                                         <select class="form-control" name="designation"  >
                                            <option value="software developement">
                                                <strong>SOFTWARE DEVELOPEMENT</strong>
                                            </option>
                                            <option value="web developement">
                                                 <strong>WEB DEVELOPEMENT </strong>
                                            </option>
                                            <option value="app developement">
                                                 <strong>MOBILE APP DEVELOPEMENT </strong>
                                            </option>
                                            <option value="data science engineer">
                                                <strong>DATA SCIENCE ENGINEER </strong>
                                            </option>
                                         </select>
                                </div>
                                <div class="form-group">
									<label for="ph no">PH.NO</label><input type="number"   name="phno" class="form-control" required />
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
										<label for="address">ADDRESS</label><textarea     name="address" class="form-control" required ></textarea>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
										<label for="dob">D.O.B</label><input type="date"    name="dob" class="form-control" required />
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
                                </div>   
                                <div class="form-group">
                                     <label for="age">AGE</label><input type="number"    name="age" class="form-control" required/>
									 <div class="valid-feedback">Valid.</div>
									 <div class="invalid-feedback">Please fill out this field.</div>
                                </div>  
                                <div class="form-group">
                                     <label for="doj">DATE OF JOINING</label><input type="date"    name="doj" class="form-control"required />
									 <div class="valid-feedback">Valid.</div>
									 <div class="invalid-feedback">Please fill out this field.</div>
                                </div> 
								<hr>
                                <h5><B>Set Password</B></h5> 
                                <div class="form-group">
                        
								 <label for="psw">Password</label>
									<input type="password" id="psw" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>
							
								<div id="message">
							<h3>Password must contain the following for your security purpose:</h3>
							<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
							<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
							<p id="number" class="invalid">A <b>number</b></p>
							<p id="length" class="invalid">Minimum <b>8 characters</b></p>
							</div>
							<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
								 <div class="form-group">
                                         <input type="checkbox" class=""  onclick="shw()"/><label for="password"><b> &nbsp;SHOW PASSWORD</label>
                                </div>
						
                                <div class="form-group">
                                     <input type="submit"    name="submit" class="form-control btn btn-danger "/>
                                </div>                            
                            </form>
								
                    </div>
                </div>
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
			// $con=mysqli_connect("localhost","root","","test");
			$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
            if(!$con)
            {
                echo"Database is not connected";
            }
            $query="INSERT INTO `register`(`NAME`, `ID`, `DESIGNATION`, `PHONE_NO`, `ADDRESS`, `D.O.B`, `AGE`, `D.O.J`, `PASSWORD`,`NO_OF_LEAVE_LEFT`) VALUES ('$name','$id','$designation','$phno','$address','$dob','$age','$doj','$password','4');";
            $result=mysqli_query($con,$query);
            
            if((is_bool($result)==true))
            {
                echo"<script> alert('You have Registered Successfully');
                location.href='index.php';
                </script>";
            }
            else
            {
                echo"<center><h4>please enter your details again</h4></center>";
            }
         }
    ?>
</html>


