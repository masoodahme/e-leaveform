<!DOCTYPE html>
<html>
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="stylesheet" href="contact.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}




.w3-bar .w3-button {
  padding: 16px;
}

</style>
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
   <script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

<body>
<div class="w3-top">
  <div class="w3-bar w3-light-grey w3-card" id="myNavbar">
   <!-- <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>-->
	<a href="" alt="AYISHA TECH LIMITED"><img src="profile2.png" alt="AYISHA TECH LIMITED"  title="AYISHA TECH LIMITED"  style="float:left;width:60px;height:60px;"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
		<a href="#about" class="w3-bar-item w3-button">ABOUT</a>
		<button onclick="func1()" class="w3-bar-item w3-button"><i class="fas fa-user-tag"></i> EMPLOYEE REGISTRATION</button>
	    <button onclick="func2()" class="w3-bar-item w3-button"><i class="far fa-newspaper"></i>&nbsp;EMPLOYEE  LEAVE FORM SUBMISSION </button>
		<button onclick="func0()" class="w3-bar-item w3-button"><i class="fas fa-user-cog"></i>   ADMIN</button>
		<a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-light-grey  w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
		<a href="#about" onclick="w3_close()"  class="w3-bar-item w3-button">ABOUT</a>
		<button onclick="func1()" class="w3-bar-item w3-button"><i class="fas fa-user-tag"></i> EMPLOYEE REGISTRATION</button>
	    <button onclick="func2()" class="w3-bar-item w3-button"><i class="far fa-newspaper"></i>&nbsp;EMPLOYEE  LEAVE FORM SUBMISSION </button>
		 <button onclick="func0()" class="w3-bar-item w3-button"><i class="fas fa-user-cog"></i>   ADMIN</button>
		<a href="#contact"  onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
</nav>
<!-- Header with full-height image -->
<header  id="home">
<img src="default.png"  width="100%" height="800px">
  <!--<div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
	  <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> -->
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fab fa-facebook-square fa-lg w3-hover-opacity"></i>
    <i class="fab fa-instagram fa-lg w3-hover-opacity"></i>
    <i class="fab fa-snapchat-square fa-lg w3-hover-opacity"></i>
   <i class="fab fa-pinterest-square fa-lg w3-hover-opacity"></i>
   <i class="fab fa-twitter-square fa-lg  w3-hover-opacity"></i>
   <i class="fab fa-linkedin fa-lg w3-hover-opacity"></i>
  </div>
</header>
<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
     <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
    </div>
    <div class="w3-quarter">
     <!-- <i class="fab fa fa-diamond w3-margin-bottom w3-jumbo"></i>-->
	  <img src="innovation.jpg" style="width:110px;height:110px;">
      <p class="w3-large">INNOVATION</p>
      <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
     <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
    </div>
  </div>
</div>
<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:15px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chennai, INDIA</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 6379460938</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: ayishanaznee@gmail.com</p>
    <br>
	<?php// include('contact.php');?>
    <form action="" method="post" >
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button  class="w3-button w3-black" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"  type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p><!--onclick="document.getElementById('id01').style.display='block'" style="width:auto;"-->
    </form>
	
	<div id="id01" class="modal">
  
		<div  class='modal-content animate' >
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src='thanks.jpg' alt="thank you for contacting us" class="avatar">
		</div>
	</div>
	
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	 <!-- Image of location/map -->
	<center> <strong><h1>OUR LOCATION</h1>
  <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d485.7532188768811!2d80.25586774629076!3d13.097554533017325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1575037337233!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
</div>
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fab fa-facebook-square fa-lg w3-hover-opacity"></i>
    <i class="fab fa-instagram fa-lg w3-hover-opacity"></i>
    <i class="fab fa-snapchat-square fa-lg w3-hover-opacity"></i>
   <i class="fab fa-pinterest-square fa-lg w3-hover-opacity"></i>
   <i class="fab fa-twitter-square fa-lg  w3-hover-opacity"></i>
   <i class="fab fa-linkedin fa-lg w3-hover-opacity"></i>
  </div>
</footer>
 
<script>

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
</body>
</html>