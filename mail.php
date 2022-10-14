<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['Address'];
$phone = $_POST['phone'];
$gender = $_POST['name'];
$weight = $_POST['wight'];
$height = $_POST['height'];
$to= "rbgarg4881@gmail.com";
$subject = "Mail from Customer";
$txt ="Name = ".$name . "\r\n Email = ". $email . "\r\n Address " . $address . "\r\n Phone = ".$phone . "\r\n Gender = ". $gender . "\r\n Weight " . $weight . "\r\n Height " . $height;
$header = "From:noreply@yoursite.com" . "\r\n".
"CC: somebodyelse@example.com";
if($email!=NULL){
	mail($to,$subject,$txt,$header);
}
header("Location:thankspage.html");
?>