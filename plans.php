<?php 
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('plansen.php');
    break;
    case "ar":
        require('plansar.php');
   
    break;
    default:
        require('plansar.php');
    }
    ?>
