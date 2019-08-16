<?php
    //session_start();
    if(!isset($_SESSION['NAME']))
    {
        echo"<script>location.href='login.php'</script>";
    }
?>
<?php
    
    $random=rand(10000,99999);
    $da=$_SESSION['da'];
    $name=$_SESSION['NAME'];
    $phno=$_SESSION['PHNO'];
    $con=mysqli_connect("localhost","root","","eleaveform");
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
    echo"<center><h4>OTP HAVE SEND TO YOUR MOBILE SUCCESSFULLY</center>";;
}

?>