<?php
session_start();
include('server.php');
$username = $_SESSION['username'] ; $password = $_SESSION['password'] ;
if(!isset($username, $password)){
    header("Location: https://onlinefse.com/404.php");
 }
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard  </title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php
  include("headLinks.html");
  ?>
        <link href="sidebar.css" rel="stylesheet">
    <link href="home.css" rel="stylesheet">

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  <style>
      
      .card-header{    
      
      background-color: cornflowerblue;
}
.sbbtn:focus{
     background-color: cornflowerblue!important;
}
.sbbtn{
    color:white;
     background-color: cornflowerblue!important;
}
.sbbtn:active{
      color:white;
     background-color: cornflowerblue!important;
}
  </style>
</head>
<body style="font-family: 'Cairo';">


    <div class="d-flex" id="wrapper">
	
	

        <div id="page-content-wrapper">
     
	 <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean" style="background-color: rgba(255,255,255,0)!important;opacity: 1;margin: 0px;">
                <div class="container"><a class="navbar-brand" href="https://onlinefse.com/index.php" style="font-size: 42px;color: rgb(255,255,255);">   <!-- Logo Image -->
      <img src="assets/img/icon3.png" width="100px" alt="" class="d-inline-block align-middle mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold"></span></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="color: white!important;"><span class="sr-only" style="color: rgb(255,255,255);">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(248,248,248)!important;filter: brightness(115%) contrast(74%);"></span></button>
                    <div
                        class="collapse navbar-collapse text-left d-md-flex justify-content-md-end" id="navcol-1">
                        <ul class="nav navbar-nav text-left">
                                    <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/index.php" style="color: black;font-family: Cairo, sans-serif;font-size: 20px;">Home</a></li>
                                          <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/plans.php" style="color: black;font-family: Cairo, sans-serif;font-size: 20px;">Registration</a></li>
                                                          <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/contactUs.php" style="color: black;font-family: Cairo, sans-serif;font-size: 20px;">Contact Us</a></li>
                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class=" btn btn-link " href="https://onlinefse.com/logout.php?la=ar" style="color: black;font-family: Cairo, sans-serif;font-size: 20px;">Logout</a></li>
            
                         
                       
                           
                        </ul>
                </div>
        </div>
        </nav> 


            <!-- nav ends  -->


            <!-- page content starts-->

            <div class="container-fluid" id="proCon">
                
    <div class="row">            
 <div class='col col-4 col-lg-4 col-md-4 '><div class='card'><div class='card-header card-header-icon papersInfo'><p class='card-category'>Number Of All Students</p>
 <h3 class='card-title text-center'>
      <?php   



 $stmt1 = $conn->prepare("SELECT count(*) as cc FROM `studentsinfo` "); 
  $stmt1->execute();
$result = $stmt1->get_result(); 


while ($row = $result->fetch_assoc()) {
    
echo $row['cc'];
}
?>
     
     
 </h3></div></div></div>
 </div>
 <div class="row">  
 <hr><div class=' col-12 col-lg-12 col-md-12 '><div class='card paperTcard'><div class='card-header papersTable'><h4 class='card-title'>Students Info</h4></div><div class='card-body table-responsive'><table class='table table-hover'><thead><tr> 
 <th>Student_No</th>
 <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
          <th>Date of birth</th>
           <th>Gender</th>
        <th>Country</th>
        <th>City</th>
          <th>Zip code</th>
       
        <th>Phone number</th>
          
          <th>Group name</th>
       
        <th>Level</th>
         <th>Plan</th></tr></thead><tbody id="showData">
     <?php
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
     </tbody></table></div></div></div>
     </div>
     
          <!--<div id="showdata" style="width:80%; height:700px;background-color:red;" class="text-center">-->
            <!--<div   class="table-responsive">-->
    
  <!--<table class="table table-hover table-sm w-auto "  style="overflow:scroll;" >-->
  
  <!--<div class="card" style="width: 18rem;">-->

  
</div>

</div>
	<!--side bar-->

<div class="bg-light border-right" id="sidebar-wrapper">
 

    <div class="sidebar-heading text-center">
        <div class="list-group list-group-flush" id="sidebarlist">
            <h2 style="color: cornflowerblue;margin-top:70px;">Admin Dashboard</h2>
           <button onclick="getalld()"  class=" list-group-item list-group-item-action bg-light text-left sbbtn" style="">  Show All students</button>
           <hr>
            <h5 style="color: cornflowerblue;margin-top:70px;">Sort by levels</h5>
         
         <div class="text-left">
            <div><input type="radio" class="levels" value="level1" style="margin-right:20px;" id="level1 " name="levels"><p style="display:inline;" >Beginner</p> </div>
          <div><input type="radio" class="levels" value="level2" style="margin-right:20px;" id="level2 " name="levels"><p style="display:inline;" >Intermediate</p> </div>
   
            <div><input type="radio" class="levels" value="level3" style="margin-right:20px;" id="level3 " name="levels"><p style="display:inline;" >Advanced</p> </div>
            </div>
            
              <button onclick="getd1()"  class=" list-group-item list-group-item-action bg-light text-left sbbtn">   Show results</button>
              
          <hr>
            <h5 style="color: cornflowerblue;margin-top:70px;">Sort by plans</h5>
            
            
              <div class="text-left">
                      <div><input type="radio" class="plans" value="plan1" style="margin-right:20px;" id="plan1 " name="plans"><p style="display:inline;" >one student one level </p> </div>
            <div><input type="radio" class="plans" value="plan2" style="margin-right:20px;" id="plan2 " name="plans"><p style="display:inline;" >4 students one level</p> </div>
          <div><input type="radio" class="plans" value="plan3" style="margin-right:20px;" id="plan3 " name="plans"><p style="display:inline;" > 8 student one level</p> </div>
   
            <div><input type="radio" class="plans" value="plan4" style="margin-right:20px;" id="plan4 " name="plans"><p style="display:inline;" >one student 3 levels </p> </div>
          
            </div>
            
                      <button onclick="getd2()"  class=" list-group-item list-group-item-action bg-light text-left sbbtn">   Show results</button>
            

        
        
        </div></div></div>
        
        <!--end side bar -->

<script>
      var levels=  document.getElementsByClassName("levels");
      var plans=  document.getElementsByClassName("plans");
    function getd1(){
           for (var i = 0; i < plans.length; i++) {
                        plans[i].checked=false;
                 }
                
        var level="";
        // var plan="";
      
        for (var i = 0; i < levels.length; i++) {
   if( levels[i].checked){
       var level = levels[i].value;
         var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("showData").innerHTML = "";
                        document.getElementById("showData").innerHTML = this.responseText;
                    }
                };
             
                xmlhttp.open("GET", "getData.php?level=" + level , true);
                xmlhttp.send();
   
   }

   
   
}
  
           
    }
    
     function getd2(){
        
                  for (var i = 0; i < levels.length; i++) {
                        levels[i].checked=false;
                 }
        var plan="";
        
        for (var i = 0; i < plans.length; i++) {
   if( plans[i].checked){
       var plan = plans[i].value;
         var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("showData").innerHTML = "";
                        document.getElementById("showData").innerHTML = this.responseText;
                    }
                };
             
                xmlhttp.open("GET", "getData1.php?plan=" + plan , true);
                xmlhttp.send();
   
   }
 
 
   
}

      
          
           
    }
    
     function getalld(){
            for (var i = 0; i < plans.length; i++) {
                        plans[i].checked=false;
                 }
                  for (var i = 0; i < levels.length; i++) {
                        levels[i].checked=false;
                 }
                 
          var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("showData").innerHTML = "";
                        document.getElementById("showData").innerHTML = this.responseText;
                        
                    }
                };
           xmlhttp.open("GET", "getAllData.php" , true);
                xmlhttp.send();
                
              
                
                
     }
</script>

</div>
</body>
</html>
