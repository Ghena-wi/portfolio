<?php
include('server.php');

$cuEmail=$_POST['cuEmail'];
$cuTitle=$_POST['cuTitle'];
$cuMsg=$_POST['cuMsg'];

// send email

require_once("class.phpmailer.php");
require ("PHPMailerAutoload.php");
include("class.smtp.php");
$mailer = new PHPMailer();
$mailer->Port = 465;
$mailer ->Host = "mail.onlinefse.com";
$mailer->SMTPAuth = TRUE;
$mailer ->Username = "info@onlinefse.com";                 
$mailer ->Password = "online@FSE2020";  
$mailer ->From = $cuEmail;
$mailer->FromName = $cuEmail;
$mailer->Subject = $cuTitle;
$mailer->SMTPSecure = 'tls';
$mailer->ClearAddresses();
$mailer->AddAddress("info@onlinefse.com");
// $mailer->AddBCC('');
$msg="<!DOCTYPE html>
<html>
<body>
<p>
".$cuMsg."</p></body></html>";

$mailer->IsHTML(true);
$mailer->CharSet = 'UTF-8';    
$mailer->Body =$msg ;
$mailer->Send();


//store data 
$dateReg=date("Y-m-d");
$stmt = $conn->prepare("INSERT INTO `contactus`(`email`, `title`, `msg` ,`date`) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $cuEmail,$cuTitle,$cuMsg,$dateReg);
$stmt->execute();

 	mysqli_close($conn);
  	header("Location: https://onlinefse.com/contactUs.php?submitted=1");

?>