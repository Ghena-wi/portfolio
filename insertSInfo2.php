<?php
session_start();
include('server.php');
require_once("class.phpmailer.php");
require ("PHPMailerAutoload.php");
include("class.smtp.php");
//check if session is set
if(empty($_SESSION["first_name1"]) || empty($_SESSION["last_name1"])|| empty($_SESSION["date_of_birth1"]) || empty($_SESSION["phone_num1"])|| empty($_SESSION["Country1"]) || empty($_SESSION["email1"])|| empty($_SESSION["chosen_level"]) ||  empty($_SESSION["city1"]) || empty($_SESSION["postal1"]) ||  empty($_SESSION["gender1"]) || empty($_SESSION["group_name"]) || empty($_SESSION["first_name2"]) || empty($_SESSION["last_name2"])|| empty($_SESSION["date_of_birth2"]) || empty($_SESSION["phone_num2"])|| empty($_SESSION["Country2"]) || empty($_SESSION["email2"])||  empty($_SESSION["city2"]) || empty($_SESSION["postal2"]) ||  empty($_SESSION["gender2"]) || empty($_SESSION["first_name3"]) || empty($_SESSION["last_name3"])|| empty($_SESSION["date_of_birth3"]) || empty($_SESSION["phone_num3"])|| empty($_SESSION["Country3"]) || empty($_SESSION["email3"])||  empty($_SESSION["city3"]) || empty($_SESSION["postal3"]) || empty($_SESSION["gender3"]) || empty($_SESSION["first_name4"]) || empty($_SESSION["last_name4"])|| empty($_SESSION["date_of_birth4"]) || empty($_SESSION["phone_num4"])|| empty($_SESSION["Country4"]) || empty($_SESSION["email4"])||  empty($_SESSION["city4"]) || empty($_SESSION["postal4"]) ||  empty($_SESSION["gender4"]) ) {
    
header("Location: https://onlinefse.com/404en.php");
}



// ini_set('display_startup_errors', 1);
// ini_set('display_errors', 1);
// error_reporting(-1);

//get students info
for($i=1;$i<=4;$i++){
$chosen_level=$_SESSION["chosen_level"];
$group_name=$_SESSION["group_name"];
$first_name=$_SESSION["first_name".$i];
$last_name=$_SESSION["last_name".$i];
$date_of_birth=$_SESSION["date_of_birth".$i];
$phone_num=$_SESSION["phone_num".$i];
$country=$_SESSION["Country".$i];
$email=$_SESSION["email".$i];
$city=$_SESSION["city".$i];
$postal=$_SESSION["postal".$i];
$gender=$_SESSION["gender".$i];


// insert students info
$stmt = $conn->prepare("INSERT INTO `studentsinfo`(`first_name`, `last_name`, `date_of_birth`, `gender`, `phone_num`, `country`, `email`,  `city`,  `postal`,`chosen_level`,`group_name`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssss", $first_name,$last_name,$date_of_birth,$gender,$phone_num,$country,$email,$city,$postal,$chosen_level,$group_name);

    $stmt->execute();

    $stmt->close();

  //get students number
$stmt2 = $conn->prepare("SELECT `S_No` FROM `studentsinfo` WHERE email=?"); 
$stmt2->bind_param("s", $email);
$stmt2->execute();
$result = $stmt2->get_result(); 

 $S_N=0;
while ($row = $result->fetch_assoc()) {
    $S_N= $row['S_No'];
}
  $stmt2->close();

//insert students registration info
$P_No=2;
$dateReg=date("Y-m-d");

$stmt3 = $conn->prepare("INSERT INTO `registration`(`S_No`, `P_No`,`date`) VALUES (?,?,?)");
$stmt3->bind_param("iis", $S_N,$P_No,$dateReg);

    $stmt3->execute();
    $stmt3->close();



//send email


// $mailer = new PHPMailer();
// $mailer->Port = 465;
// $mailer ->Host = "mail.onlinefse.com";
// $mailer->SMTPAuth = TRUE;
// $mailer ->Username = "info@onlinefse.com";                 
// $mailer ->Password = "online@FSE2020";  
// $mailer ->From = "info@onlinefse.com";
// $mailer->FromName = "Fun Size English";
// $mailer->Subject = "Few more steps to go !";
// $mailer->SMTPSecure = 'tls';
// $mailer->ClearAddresses();
// $mailer->AddAddress($email);

// $msg="<!DOCTYPE html>
// <html dir=\"ltr\"  lang=\"en\">
// <body style='font-family: \"Cairo\";text-align:left;'>
// <h3>
// Your registration is completed successfully </h3>
// </br>
// <h4>Few more steps to go ...!</h4>
// </br>
// <h4>You need to take the exam in the following link to test your english level</h4>
// .....


// <h4>Thank You</h4>
// </body></html>";

// $mailer->IsHTML(true);
// $mailer->CharSet = 'UTF-8';    
// $mailer->Body =$msg ;
// $mailer->Send();


	
}


	mysqli_close($conn);

	
	
	

if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('insertSInfo2en.php');
    break;
    case "ar":
        require('insertSInfo2ar.php');
   
    break;
    default:
        require('insertSInfo2ar.php');
    }
    
?>
