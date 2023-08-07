<?php 

// connect to the database
// $DB_host = gethostname();
// $DB_user = "onlinefs_dbu1";
// $DB_pass = "online+FSE2020";
// $DB_name = "onlinefs_db";


$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "onlinefs_db";

$conn = mysqli_connect($DB_host,$DB_user,$DB_pass,$DB_name);
mysqli_set_charset($conn,"utf8");

if($conn===false)
{
	die("error: could not connect".mysqli_connect_error());
}


?>
