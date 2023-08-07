   <?php   
   session_start();
include('server.php');
   //get all students

 if (!strcmp($_GET['plan'],"plan1") ){

   $stmt1 = $conn->prepare("select S_No from registration where P_No = 1 "); 
  $stmt1->execute();
$result = $stmt1->get_result(); 


while ($row = $result->fetch_assoc()) {
    
       $stmt2 = $conn->prepare("SELECT * from studentsinfo where S_No=".$row['S_No']); 

  $stmt2->execute();
$result2 = $stmt2->get_result(); 


while ($row2 = $result2->fetch_assoc()) {
    echo "
     <tr>
      <td>".$row2['S_No']."</td>
        <td>".$row2['first_name']."</td>
        <td>".$row2['last_name']."</td>
        <td>".$row2['email']."</td>
        <td>".$row2['date_of_birth']."</td>
        <td>".$row2['gender']."</td>
        <td>".$row2['country']."</td>
        <td>".$row2['city']."</td>
        <td>".$row2['postal']."</td>
        
        <td>".$row2['phone_num']."</td>
  
         <td>".$row2['group_name']."</td>
         <td>".$row2['chosen_level']."</td>
         <td>one student one level</td>
    
      </tr>
      ";
         

}

}

}
 else if (!strcmp($_GET['plan'],"plan2") ){

   $stmt1 = $conn->prepare("select S_No from registration where P_No = 2 "); 
  $stmt1->execute();
$result = $stmt1->get_result(); 


while ($row = $result->fetch_assoc()) {
    
       $stmt2 = $conn->prepare("SELECT * from studentsinfo where S_No=".$row['S_No']); 

  $stmt2->execute();
$result2 = $stmt2->get_result(); 


while ($row2 = $result2->fetch_assoc()) {
    echo "
     <tr><td>".$row2['S_No']."</td>
        <td>".$row2['first_name']."</td>
        <td>".$row2['last_name']."</td>
        <td>".$row2['email']."</td>
        <td>".$row2['date_of_birth']."</td>
        <td>".$row2['gender']."</td>
        <td>".$row2['country']."</td>
        <td>".$row2['city']."</td>
        <td>".$row2['postal']."</td>
        
        <td>".$row2['phone_num']."</td>
  
         <td>".$row2['group_name']."</td>
         <td>".$row2['chosen_level']."</td>
    <td>4 students one level</td>
      </tr>
      ";
         

}

}

}
 else if (!strcmp($_GET['plan'],"plan3") ){

   $stmt1 = $conn->prepare("select S_No from registration where P_No = 3 "); 
  $stmt1->execute();
$result = $stmt1->get_result(); 


while ($row = $result->fetch_assoc()) {
    
       $stmt2 = $conn->prepare("SELECT * from studentsinfo where S_No=".$row['S_No']); 

  $stmt2->execute();
$result2 = $stmt2->get_result(); 


while ($row2 = $result2->fetch_assoc()) {
    echo "
     <tr><td>".$row2['S_No']."</td>
        <td>".$row2['first_name']."</td>
        <td>".$row2['last_name']."</td>
        <td>".$row2['email']."</td>
        <td>".$row2['date_of_birth']."</td>
        <td>".$row2['gender']."</td>
        <td>".$row2['country']."</td>
        <td>".$row2['city']."</td>
        <td>".$row2['postal']."</td>
        
        <td>".$row2['phone_num']."</td>
      
         <td>".$row2['group_name']."</td>
         <td>".$row2['chosen_level']."</td>
      <td>8 students one level</td>
      </tr>
      ";
         

}

}

}
 else if (!strcmp($_GET['plan'],"plan4") ){

   $stmt1 = $conn->prepare("select S_No from registration where P_No = 4 "); 
  $stmt1->execute();
$result = $stmt1->get_result(); 


while ($row = $result->fetch_assoc()) {
    
       $stmt2 = $conn->prepare("SELECT * from studentsinfo where S_No=".$row['S_No']); 

  $stmt2->execute();
$result2 = $stmt2->get_result(); 


while ($row2 = $result2->fetch_assoc()) {
    echo "
     <tr><td>".$row2['S_No']."</td>
        <td>".$row2['first_name']."</td>
        <td>".$row2['last_name']."</td>
        <td>".$row2['email']."</td>
        <td>".$row2['date_of_birth']."</td>
        <td>".$row2['gender']."</td>
        <td>".$row2['country']."</td>
        <td>".$row2['city']."</td>
        <td>".$row2['postal']."</td>
        
        <td>".$row2['phone_num']."</td>
        
         <td>".$row2['group_name']."</td>
         <td>".$row2['chosen_level']."</td>
      <td>one student 3 levels</td>
      </tr>
      ";
         

}

}

}
  $stmt1->close();
  ?>
   
   