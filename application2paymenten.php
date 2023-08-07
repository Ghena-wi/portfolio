<?php
session_start();
include('server.php');
//check if session is set
if(empty($_SESSION["first_name1"]) || empty($_SESSION["last_name1"])|| empty($_SESSION["date_of_birth1"]) || empty($_SESSION["phone_num1"])|| empty($_SESSION["Country1"]) || empty($_SESSION["email1"])|| empty($_SESSION["chosen_level"]) ||  empty($_SESSION["city1"]) || empty($_SESSION["postal1"]) ||  empty($_SESSION["gender1"]) || empty($_SESSION["group_name"]) || empty($_SESSION["first_name2"]) || empty($_SESSION["last_name2"])|| empty($_SESSION["date_of_birth2"]) || empty($_SESSION["phone_num2"])|| empty($_SESSION["Country2"]) || empty($_SESSION["email2"])||  empty($_SESSION["city2"]) || empty($_SESSION["postal2"]) ||  empty($_SESSION["gender2"]) || empty($_SESSION["first_name3"]) || empty($_SESSION["last_name3"])|| empty($_SESSION["date_of_birth3"]) || empty($_SESSION["phone_num3"])|| empty($_SESSION["Country3"]) || empty($_SESSION["email3"])||  empty($_SESSION["city3"]) || empty($_SESSION["postal3"]) || empty($_SESSION["gender3"]) || empty($_SESSION["first_name4"]) || empty($_SESSION["last_name4"])|| empty($_SESSION["date_of_birth4"]) || empty($_SESSION["phone_num4"])|| empty($_SESSION["Country4"]) || empty($_SESSION["email4"])||  empty($_SESSION["city4"]) || empty($_SESSION["postal4"]) ||  empty($_SESSION["gender4"]) ) {
    
    

     header("Location: https://onlinefse.com/404en.php");
}

?>
<!--ini_set('display_startup_errors', 1);-->
<!--ini_set('display_errors', 1);-->
<!--error_reporting(-1);-->



<!DOCTYPE html>
<html style="filter: brightness(103%);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Application</title>
     <?php
        include("headLinks.html");
        ?>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     
     
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body style="font-family: 'Cairo';">
    <div style="background-color: rgba(255,255,255,0)!important;"></div>
    <header class="masthead text-center text-white" style="position: static;font-family: 'Cairo';background-image: url(&quot;assets/img/coursesHeading.jpg&quot;);background-position: bottom;padding-top: 0px;height: 411px;background-size: cover;">
           
  
  <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean" style="background-color: rgba(255,255,255,0)!important;opacity: 1;margin: 0px;">
                <div class="container"> <a class="navbar-brand" href="https://onlinefse.com/index.php" style="font-size: 42px;color: rgb(255,255,255);">   <!-- Logo Image -->
      <img src="assets/img/icon3.png" width="100px" alt="" class="d-inline-block align-middle mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold"></span></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="color: white!important;"><span class="sr-only" style="color: rgb(255,255,255);">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(248,248,248)!important;filter: brightness(115%) contrast(74%);"></span></button>
                    <div
                        class="collapse navbar-collapse text-left d-md-flex justify-content-md-end" id="navcol-1">
                        <ul class="nav navbar-nav text-left">
                                      <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/index.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">Home</a></li>
                                                        <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/plans.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">Registration</a></li>
                                                                       <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/contactUs.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">Contact Us</a></li>
                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class=" btn btn-link " href="https://onlinefse.com/application2payment.php?la=ar" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">العربية</a></li>
             
             
                     
                           
                        </ul>
                </div>
        </div>
        </nav>
    </header>
   
    

     <div class="register-photo" style="margin-top: -150px;background-color: rgba(241,247,252,0);">
        <div class="form-container">
            <div class="text-center border rounded shadow"  style="background-color:white;padding:20px;">
               <h1 style="font-family: Cairo, sans-serif;font-size:30px;color: rgb(80,94,108);">Group of 4 students registration form <h1>
                  <h5 style="font-family: Cairo, sans-serif;color: rgb(80,94,108);">Payment </h5>
                   <hr>
                         <div style="height: 33px;"></div>
                <div style="height: 33px;"></div>
                <div style="height: 33px;"></div>
                <!--<div class="form-row text-right" id="infoSection">-->
                           <div id="paySection" class="row  justify-content-center text-right">
                    <div class="col col-12 col-md-6 col-lg-6 ">
                        
                            <div id="paypal-button-container"></div>

     <!--Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AY6W-w19WfCrEeXTi_9NqqX-iZsmySkZ36VPeqwxRed0KaueflvDj4Fa4c-gaNqqMZymxd9fTVXB0oNx&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '240'
                        }
                    }]
                });
            },

            // Finalize the transaction
          onApprove: function(data, actions) {
  return actions.order.capture().then(function() {
   
  window.location = "paypal_transaction_done2.php?&orderID="+data.orderID;	

  });
}

        }).render('#paypal-button-container');
    </script>
    
    
    <div style="height: 33px;"></div><div style="height: 33px;"></div>
 
                          
         <!--                   <h3 id="showOn" class="text-left" style="display:none;font-size: 20px;font-family: 'Cairo';">-->
         <!--                    Payment completed successfully, please click on the registration button to complete the process -->
         <!--                   </h3>-->
                       
         <!--                 <div style="height: 33px;"></div><div style="height: 33px;"></div>     -->
    
         <!--<div class="text-center"><button class="btn btn-light text-white text-black-50" style="font-size: 20px;font-weight: 300;background-color: rgb(255,198,30);font-family: 'Cairo';padding: 15px 50px;color: rgb(0,0,0)!important;" name="next" id="sub1" onclick="insertdata()" disabled="true">Register</button></div>-->
         
         <!-- <div style="height: 33px;"></div><div style="height: 33px;"></div>   <div style="height: 33px;"></div>   -->
    </div>
                  
                  
                  
                  
                  
                   
                
        </div>
     
     </div>
 
        </div>
    </div>
    </div>
    
    
   <div class="text-center" style="background-color: rgb(45,80,111)!important;height: auto;margin-bottom: 0px; padding:30px;padding-bottom: 1rem!important; padding-top: 2rem!important;">
      
             <a><p class="text-center" style="font-family: Cairo, sans-serif;font-size: 16px; color: rgb(255,255,255);">info@onlinefse.com</p></a>
              <a><p class="text-center" style="font-family:Cairo, sans-serif;font-size:16px;color: rgb(255,255,255);">rbarudi@onlinefse.com</p></a>
               <a><p class="text-center" style="font-family:Cairo, sans-serif;font-size:16px;color: rgb(255,255,255);">wafi@onlinefse.com</p></a>
              <a class="nav-link" href="https://www.facebook.com/Fun-Size-English-110629264046215/" style="font-size: 17px;    display: inline-flex;"><i class="fab fa-facebook-square" style="color: rgb(255,255,255); padding-right:10px;    padding-top: 3px; "></i> <p style="font-size: 15px;  color: rgb(255,255,255);">Fun Size English </p> </a>
                         <!--<div> <a href=""><i class="fa fa-instagram " style=" color: indianred;font-size: 19px; display: inline-block;padding-right:7px;  "> </i> <p style="font-size: 15px;    display: inline-flex; color: rgb(255,255,255);">Fun Size English  </p></a></div>-->
                      <div> <a href="tel:+1 352-345-5053" ><i class="fa fa-whatsapp" style=" color:rgb(74,201,89);font-size: 19px; display: inline-block;padding-right:7px;  "> </i> <p style="font-size: 15px;    display: inline-flex; color: rgb(255,255,255);">+1 352-345-5053 </p></a></div>
                            <hr>  <div>
              <p  style="padding-left: 0px;color: rgb(255,255,255); display: inline-flex;margin-top:15px;">Fun Size English 2020</p>
        </div></div> 
        </body>
    <script>
    //     function insertdata(){
    //         window.location.href = 'https://onlinefse.com/insertSInfo2.php';
    //     }
        
    //         $(document).ready(function(){
        
    //      if(window.location.href.indexOf("success") > -1) {
    //   $('#showOn').css('display', 'block');
    //   document.getElementById("sub1").disabled = false;
    // }
   
    // });
    
    </script>

</html>