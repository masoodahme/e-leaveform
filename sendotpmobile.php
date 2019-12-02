<?php
    //session_start();
    if(!isset($_SESSION['NAME']))
    {
        echo"<script>location.href='index.php'</script>";
    }
?>
<html>
	<head>
		<title>
			OTP VERIFICATION
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="registration.css">
		<div class="w3-main" style="margin-left:300px">
		   <div class="w3-hide-large" style="margin-top:83px"></div>
<?php
    
    $random=rand(10000,99999);
    //$da=$_SESSION['da'];
	include('leaveleft.php');
	$da=$leaveleft;
    $name=$_SESSION['NAME'];
    $phno=$_SESSION['PHNO'];
	$con=mysqli_connect("localhost","id10477503_root","12345","id10477503_eleaveform");
	//$con=mysqli_connect("localhost","root","","test");
    if(!($con))
    {
        echo"DATABASE NOT ESTABLISHED";
    }
    $query="INSERT INTO `otp`(`otp`) VALUES ('$random');";
    $result=mysqli_query($con,$query);
    $field = array(
    "sender_id" => "FSTSMS",
    "language" => "english",
    "route" => "qt",
    "numbers" => "$phno",
   // "message" => "YOUR_QT_SMS_ID",
   "message" => "14021",
    "variables" => "{#CC#}|{#AA#}|{#BB#}",
    "variables_values" => "$name|$da|$random"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($field),
  CURLOPT_HTTPHEADER => array(
    "authorization: Cyw3UbuFx1PZtmi26f04EpeJAIYqQTzDcSRHVWhvkjKdaoOLgGpfoihzOW8nBGjtrsIDHVA7Z0P9w4S5",
    "cache-control: no-cache",
    "accept: */*",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
   echo"
		<div class='alert alert-success alert-dismissible'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		<strong>Success!</strong> Otp has sent to your mobile.
		</div>";
}

?>
	</div>
</div>