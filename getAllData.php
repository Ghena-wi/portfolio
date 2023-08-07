   <?php   
   session_start();
include('server.php');


 $stmt1 = $conn->prepare("SELECT * FROM `studentsinfo` "); 
  $stmt1->execute();
$result = $stmt1->get_result(); 


while ($row = $result->fetch_assoc()) {
    
       $stmt2 = $conn->prepare("SELECT plan from plans,registration,studentsinfo where studentsinfo.S_No=registration.S_No and studentsinfo.S_No=".$row['S_No']." and registration.P_No = plans.P_No"); 

  $stmt2->execute();
$result2 = $stmt2->get_result(); 


while ($row2 = $result2->fetch_assoc()) {
    echo "
     <tr>
     <td>".$row['S_No']."</td>
        <td>".$row['first_name']."</td>
        <td>".$row['last_name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['date_of_birth']."</td>
        <td>".$row['gender']."</td>
        <td>".$row['country']."</td>
        <td>".$row['city']."</td>
        <td>".$row['postal']."</td>
        
        <td>".$row['phone_num']."</td>
     
         <td>".$row['group_name']."</td>
         <td>".$row['chosen_level']."</td>
      <td>".$row2['plan']."</td>
      
      </tr>
      ";
         

}

}
?>