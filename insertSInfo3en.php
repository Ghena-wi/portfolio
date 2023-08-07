
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
                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class=" btn btn-link " href="https://onlinefse.com/plans.php?la=ar" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">العربية</a></li>
                        
                    
                        
                           
                        </ul>
                </div>
        </div>
        </nav>
    </header> 

    <?php
    include("footer.html");
    
      session_start();
    for($i=1;$i<=8;$i++){
 unset($_SESSION["first_name".$i]);
	unset($_SESSION["last_name".$i]);
	unset($_SESSION["date_of_birth".$i]);
	unset($_SESSION["phone_num".$i]);
	unset($_SESSION["Country".$i]);
	unset($_SESSION["email".$i]);
	unset($_SESSION["city".$i]);
	unset($_SESSION["postal".$i]);

	unset($_SESSION["gender".$i]);
    }
	
		unset($_SESSION["chosen_level"]);
	unset($_SESSION["group_name"]);
	
    ?>
    
<script type="text/javascript">
     $(document).ready(function(){
        

     
         swal({
  title:"successfully registered",
  text: "we will communicate with you by email",
   icon: "success",
  button: "Ok",
})
.then((value) => {
  window.location.replace("plans.php"); 

  });

     });
  
   
 
    
    </script>

</body>
</html>

 