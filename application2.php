<?php 
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('application2en.php');
    break;
    case "ar":
        require('application2ar.php');
   
    break;
    default:
        require('application2ar.php');
    }
    ?>



