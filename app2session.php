<?php
session_start();
$_SESSION["group_name"] = $_POST['group_name'];
$_SESSION["chosen_level"] = $_POST['chosen_level'];

//student 1
$_SESSION["first_name1"] = $_POST['first_name1'];
$_SESSION["last_name1"] = $_POST['last_name1'];
$_SESSION["date_of_birth1"] = $_POST['bday1'];
$_SESSION["city1"] = $_POST['city1'];
$_SESSION["Country1"] = $_POST['Country1'];
$_SESSION["email1"] = $_POST['email1'];
$_SESSION["gender1"] = $_POST['gender1'];
$_SESSION["phone_num1"] = $_POST['phone_num1'];
$_SESSION["postal1"] = $_POST['postal1'];




//student 2

$_SESSION["first_name2"] = $_POST['first_name2'];
$_SESSION["last_name2"] = $_POST['last_name2'];
$_SESSION["date_of_birth2"] = $_POST['bday2'];
$_SESSION["city2"] = $_POST['city2'];
$_SESSION["Country2"] = $_POST['Country2'];
$_SESSION["email2"] = $_POST['email2'];
$_SESSION["gender2"] = $_POST['gender2'];
$_SESSION["phone_num2"] = $_POST['phone_num2'];
$_SESSION["postal2"] = $_POST['postal2'];



//student 3
$_SESSION["first_name3"] = $_POST['first_name3'];
$_SESSION["last_name3"] = $_POST['last_name3'];
$_SESSION["date_of_birth3"] = $_POST['bday3'];
$_SESSION["city3"] = $_POST['city3'];
$_SESSION["Country3"] = $_POST['Country3'];
$_SESSION["email3"] = $_POST['email3'];
$_SESSION["gender3"] = $_POST['gender3'];
$_SESSION["phone_num3"] = $_POST['phone_num3'];
$_SESSION["postal3"] = $_POST['postal3'];



//student 4
$_SESSION["first_name4"] = $_POST['first_name4'];
$_SESSION["last_name4"] = $_POST['last_name4'];
$_SESSION["date_of_birth4"] = $_POST['bday4'];
$_SESSION["city4"] = $_POST['city4'];
$_SESSION["Country4"] = $_POST['Country4'];
$_SESSION["email4"] = $_POST['email4'];
$_SESSION["gender4"] = $_POST['gender4'];
$_SESSION["phone_num4"] = $_POST['phone_num4'];
$_SESSION["postal4"] = $_POST['postal4'];






	header("Location: https://onlinefse.com/application2payment.php");
?>