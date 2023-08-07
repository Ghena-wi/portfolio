<?php 
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('contactUsen.php');
    break;
    case "ar":
        require('contactUsar.php');
   
    break;
    default:
        require('contactUsar.php');
    }
    ?>

