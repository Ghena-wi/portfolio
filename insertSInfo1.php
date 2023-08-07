<?php
session_start();
include('server.php');
//check if session is set
if(empty($_SESSION["first_name"]) || empty($_SESSION["last_name"])|| empty($_SESSION["date_of_birth"]) || empty($_SESSION["phone_num"])|| empty($_SESSION["Country"]) || empty($_SESSION["email"])|| empty($_SESSION["chosen_level"]) ||  empty($_SESSION["city"]) ||  empty($_SESSION["gender"]) ||empty($_SESSION["postal"])) {
    
     header("Location: https://onlinefse.com/404.php");
}

// ini_set('display_startup_errors', 1);
// ini_set('display_errors', 1);
// error_reporting(-1);

//get students info 
$first_name=$_SESSION["first_name"];
$last_name=$_SESSION["last_name"];
$date_of_birth=$_SESSION["date_of_birth"];
$phone_num=$_SESSION["phone_num"];
$country=$_SESSION["Country"];
$email=$_SESSION["email"];
$chosen_level=$_SESSION["chosen_level"];
$city=$_SESSION["city"];
$postal=$_SESSION["postal"];
$gender=$_SESSION["gender"];

//insert students info 
$stmt = $conn->prepare("INSERT INTO `studentsinfo`(`first_name`, `last_name`, `date_of_birth`, `gender`, `phone_num`, `country`, `email`,  `city`,  `postal`, `chosen_level`) VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssss", $first_name,$last_name,$date_of_birth,$gender,$phone_num,$country,$email,$city,$postal,$chosen_level);

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
$P_No=1;
$dateReg=date("Y-m-d");

$stmt3 = $conn->prepare("INSERT INTO `registration`(`S_No`, `P_No`,`date`) VALUES (?,?,?)");
$stmt3->bind_param("iis", $S_N,$P_No,$dateReg);

    $stmt3->execute();
    $stmt3->close();


//send email
// require_once("class.phpmailer.php");
// require ("PHPMailerAutoload.php");
// include("class.smtp.php");

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

    unset($_SESSION["first_name"]);
	unset($_SESSION["last_name"]);
	unset($_SESSION["date_of_birth"]);
	unset($_SESSION["phone_num"]);
	unset($_SESSION["Country"]);
	unset($_SESSION["email"]);
	unset($_SESSION["chosen_level"]);
	unset($_SESSION["city"]);
	unset($_SESSION["postal"]);

	unset($_SESSION["gender"]);
	mysqli_close($conn);
	


if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('insertSInfo1en.php');
    break;
    case "ar":
        require('insertSInfo1ar.php');
   
    break;
    default:
        require('insertSInfo1ar.php');
    }
    ?>

