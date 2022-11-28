<?php
//get data from form  
//$name = $_POST['name'];
$email= $_POST['email'];
//$message= $_POST['message'];

$to = "officeblackfalcons@gmail.com";
$subject = "Mail From Black Falcons website";
$txt ="candidate e-mail: ". $email ;//"\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" ;
//"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt);
    //mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>