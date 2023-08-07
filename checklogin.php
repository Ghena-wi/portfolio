<?php
session_start();
	 include('server.php');
include('headLinks.php');

if(isset($_POST['login_user'])){
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
	    $username = $_POST['username'] ;
  $password = md5($_POST['password']) ;
  $stmt = $conn->prepare("SELECT * FROM admin_login where username=? and password =?");
$stmt->bind_param("ss", $username,$password);
$stmt->execute();
	$result = $stmt->get_result();

  
  // if true go to user profile 
  
  if ($result->num_rows > 0) {
	 


$_SESSION["username"]=$username;
$_SESSION["password"]=$password;
header("Location: https://onlinefse.com/admindb.php");

          
	
      }
  
 
      // otherwise error msg 
      else {

       echo "<h1 style='color:red'>Something went wrong!</h1>";
  
      }
  
  }
			


?>
