<?php
include('server.php');

//search for group name
$stmt1 = $conn->prepare("SELECT DISTINCT(`group_name`) FROM `studentsinfo` "); 
$stmt1->execute();
$result = $stmt1->get_result(); 

$gn=trim($_GET['x']);
while ($row = $result->fetch_assoc()) {
    $G_N= $row['group_name'];
    if(!strcmp($G_N,$gn)){
        echo "هذا الإسم مستعمل مسبقاً";
    }
}
  $stmt1->close();



?>