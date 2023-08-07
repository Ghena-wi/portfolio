<?php
session_start();
$_SESSION["first_name"] = $_POST['first_name'];
$_SESSION["last_name"] = $_POST['last_name'];
$_SESSION["date_of_birth"] = $_POST['bday'];
$_SESSION["city"] = $_POST['city'];
$_SESSION["Country"] = $_POST['Country'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["gender"] = $_POST['gender'];
$_SESSION["phone_num"] = $_POST['phone_num'];
$_SESSION["postal"] = $_POST['postal'];


	header("Location: https://onlinefse.com/application4payment.php");
?>