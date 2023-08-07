<?php 
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('application1en.php');
    break;
    case "ar":
        require('application1ar.php');
   
    break;
    default:
        require('application1ar.php');
    }
    ?>


