<?php 
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('application2paymenten.php');
    break;
    case "ar":
        require('application2paymentar.php');
   
    break;
    default:
        require('application2paymentar.php');
    }
    ?>


