<?php 
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
     case "eng":
        require('404en.php');
    break;
    case "ar":
        require('404ar.php');
   
    break;
    default:
        require('404ar.php');
    }
    ?>
