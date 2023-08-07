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

<style>

    .popover-body{
       font-size:16px;
        font-family: 'Cairo';
        direction: rtl;
    }
    .popover-header{
            font-size:18px;
        font-family: 'Cairo';
    }
    #advancedPop{
        display:inline;
    }
    #interPop{
        display:inline;
    }
    #beginnerPop{
        display:inline;
    }
      .popover .arrow {
    display: none;
}
</style>
</head>

<body style="font-family: 'Cairo';">
     <div style="background-image: url(&quot;assets/img/coursesHeading.jpg&quot;); background-size: cover;background-position: bottom;height: 400px;">
         
  
  <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean" style="background-color: rgba(255,255,255,0)!important;opacity: 1;margin: 0px;">
                <div class="container">    <a class="navbar-brand" href="https://onlinefse.com/index.php" style="font-size: 42px;color: rgb(255,255,255);">   <!-- Logo Image -->
      <img src="assets/img/icon3.png" width="100px" alt="" class="d-inline-block align-middle mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold"></span></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="color: white!important;"><span class="sr-only" style="color: rgb(255,255,255);">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(248,248,248)!important;filter: brightness(115%) contrast(74%);"></span></button>
                    <div
                        class="collapse navbar-collapse text-left d-md-flex justify-content-md-end" id="navcol-1">
                        <ul class="nav navbar-nav text-left">
                                    <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/index.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">Home</a></li>
                                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/plans.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">Registration</a></li>
                                                       <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/contactUs.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">Contact Us</a></li>
                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class=" btn btn-link " href="https://onlinefse.com/application3.php?la=ar" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">العربية</a></li>
                  
                      
                       
                           
                        </ul>
                </div>
        </div>
        </nav>
    </div>
     <div class="register-photo" style="margin-top: -150px;background-color: rgba(241,247,252,0);">
        <div class="form-container">
            <form class="text-center border rounded shadow" method="POST"  action="app3session.php">
                  <h1 style="font-family: Cairo, sans-serif;font-size:30px;color: rgb(80,94,108);">Group of 8 students registration form <h1>
                  <h5 style="font-family: Cairo, sans-serif;color: rgb(80,94,108);">  Students information</h5>
                   <hr>
                <div style="height: 33px;"></div>
              
                <div class="form-row">
                    <div class="col col-12 col-lg-6 col-md-6 order-xs-12 order-lg-12 order-md-12" style="padding: 10px;">
                        <div style="height: 33px;"></div>
                        <div class="form-group text-left"><label style="color: #282821;">Group name </label><input class="form-control text-left" type="text" name="group_name" required=""  id="group_name" onfocusout="checkGname()">
                          <p id="gnameR" style="color:red;"></p></div>
                        <div style="height: 33px;"></div>
                            <div class="form-group text-left"><label style="color: #282821;">
                             What program would you like to register with? 
                         </label>
                         <!--<p style="font-size:14px;">Note: There is a subsequent test to ensure that the level is suitable for the chosen program</p>-->
                            <div>
                                <input  type="radio" name="chosen_level" value="beginner" required> 
                            <p class="d-inline-flex" style="margin: 5px;font-size: 13px;">Beginner</p><div id="beginnerPop" class="mb-2">        
        <button  type="button" class="btn btn-link" data-toggle="popover" data-trigger="focus"  data-placement="right"  data-content="
        The student can understand and use familiar daily expressions and very basic phrases so that he can present him/ herself, and can ask questions about personal details and answer them, also enables the student to interact in a simple way with another person
        "
        
        
        >?</button>
       
    </div>
                                </div>
                            <div> <input type="radio" name="chosen_level" value="intermediate">  <p class="d-inline-flex" style="margin: 5px;font-size: 13px;">Intermediate</p> <div id="interPop" class="mb-2">        
        <button type="button" class="btn btn-link" data-toggle="popover" data-trigger="focus" data-placement="right"  data-content
        ="
        Student can understand the main points of clear standard input on familiar matters regularly encountered in work, school, leisure, etc. Can deal with most situations likely to arise whilst travelling in an area where the language is spoken.Can produce simple connected text on topics which are familiar or of personal interest. "
        
        
        >?</button>
       
    </div>
                               </div>
                                
                            <div>
                          <input type="radio" name="chosen_level" value="advanced">      <p
                                    class="d-inline-flex " style="margin: 5px;font-size: 13px;">Advanced</p> <div id="advancedPop" >        
        <button  type="button" class="btn btn-link" data-toggle="popover"  data-trigger="focus"  data-placement="right"  data-content=" Can understand a wide range of demanding, longer texts, and recognise implicit meaning. Can express him/herself fluently and spontaneously without much obvious searching for expressions. Can use language flexibly and effectively for social, academic and professional purposes. Can produce clear, well-structured, detailed text on complex subjects"
        >?</button>
       
    </div>
                       
                                
                                
                          
                              </div>
                        </div>
                        

                    </div>
                    <div class="col col-12 col-lg-6 col-md-6 order-1 order-lg-1 order-md-1" style="padding: 10px;">
                        <div role="tablist" id="accordion-1">
                           <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="div#accordion-1 .item-1" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 1</a></h5>
                                </div>
                                <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name1" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name1" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday1" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender1" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender1" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num1" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email1" required=""></div>
                                        <div style="height: 33px;"></div>
                    <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country1" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city1" required="" placeholder="City">              </div><div class="form-group text-right">
                                      <input class="form-control text-left" type="text" name="postal1"  required="" placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                                  
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
                              <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="div#accordion-1 .item-2" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 2</a></h5>
                                </div>
                                <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name2" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name2" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday2" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender2" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender2" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num2" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email2" required=""></div>
                                        <div style="height: 33px;"></div>
                       <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country2" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city2" required="" placeholder="City">             </div><div class="form-group text-right">
                                      <input class="form-control text-left" type="text" name="postal2" required=""  placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                               
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="div#accordion-1 .item-3" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 3</a></h5>
                                </div>
                                <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name3" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name3" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday3" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender3" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender3" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num3" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email3" required=""></div>
                                        <div style="height: 33px;"></div>
                     <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country3" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city3" required="" placeholder="City">             </div><div class="form-group text-right">
                                      <input class="form-control text-left" type="text" name="postal3"  required=""  placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                                 
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
             <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4" href="div#accordion-1 .item-4" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 4</a></h5>
                                </div>
                                <div class="collapse item-4" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name4" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name4" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday4" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender4" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender4" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num4" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email4" required=""></div>
                                        <div style="height: 33px;"></div>
                      <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country4" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city4" required="" placeholder="City">             </div><div class="form-group text-right">
                                     <input class="form-control text-left" type="text" name="postal4" required=""  placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                                  
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
                             <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-5" href="div#accordion-1 .item-5" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 5</a></h5>
                                </div>
                                <div class="collapse item-5" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name5" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name5" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday5" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender5" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender5" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num5" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email5" required=""></div>
                                        <div style="height: 33px;"></div>
                   <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country5" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city5" required="" placeholder="City">             </div><div class="form-group text-right">
                                      <input class="form-control text-left" type="text" name="postal5" required=""  placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                                 
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
                              <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-6" href="div#accordion-1 .item-6" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 6</a></h5>
                                </div>
                                <div class="collapse item-6" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name6" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name6" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday6" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender6" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender6" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num6" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email6" required=""></div>
                                        <div style="height: 33px;"></div>
                    <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country6" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city6" required="" placeholder="City">             </div><div class="form-group text-right">
                                     <input class="form-control text-left" type="text" name="postal6" required=""  placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                                
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-7" href="div#accordion-1 .item-7" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 7</a></h5>
                                </div>
                                <div class="collapse item-7" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name7" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name7" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday7" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender7" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender7" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num7" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email7" required=""></div>
                                        <div style="height: 33px;"></div>
                       <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country7" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city7" required="" placeholder="City">             </div><div class="form-group text-right">
                                   <input class="form-control text-left" type="text" name="postal7" required=""  placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                           
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
             <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-8" href="div#accordion-1 .item-8" style="font-family: Cairo, sans-serif;color: #0038a8;">Student 8</a></h5>
                                </div>
                                <div class="collapse item-8" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-left"><label style="color: #282821;">Student name</label><input class="form-control text-left" type="text" name="first_name8" required="" placeholder="First name "></div>
                                        <div class="form-group text-left"><input class="form-control text-left" type="text" name="last_name8" required="" placeholder="Last name"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Date of birth</label><input class="form-control text-center" type="date" name="bday8" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Gender</label>
                                            <div><input type="radio" name="gender8" value="male" required=""><label style="margin: 5px;">Male</label></div>
                                            <div><input type="radio" name="gender8" value="female"><label style="margin: 5px;">Female</label></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label class="text-left" style="color: #282821;">Phone number</label><input class="form-control d-inline-flex" type="tel" name="phone_num8" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-left"><label style="color: #282821;">Email</label><input class="form-control" type="email" name="email8" required=""></div>
                                        <div style="height: 33px;"></div>
                   <div class="form-group text-left"><label style="color: #282821;">Country</label>
                          <input class="form-control text-left" type="text" name="Country8" required="" placeholder="Country"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-left"><label style="color: #282821;">Address</label><input class="form-control text-left" type="text" name="city8" required="" placeholder="City">             </div><div class="form-group text-right">
                                      <input class="form-control text-left" type="text" name="postal8" required=""  placeholder="Zip code "></div>
                                    <div style="height: 33px;"></div>
                         
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
    </div>
    </div>
    </div>
         <div style="height: 33px;"></div>
     <div class="form-row">
            <div class="col">
                <div class="form-group text-center"><button class="btn btn-light text-white text-black-50" style="font-size: 20px;font-weight: 300;background-color: rgb(255,198,30);font-family: 'Cairo';padding: 15px 50px;color: rgb(0,0,0)!important;" name="next" type="submit"  >Next</button></div>
               
            </div>
        </div>
    </form>
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


$(document).ready(function(){
    $("#advancedPop button").popover({
        title : ' Advanced level',
            html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header text-left"></h3><div class="popover-body text-justify"></div></div>'
    });
      $("#interPop button").popover({
        title : 'Intermediate level ',
            html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header text-left"></h3><div class="popover-body text-justify"></div></div>'
    });
      $("#beginnerPop button").popover({
        title : 'beginner level ',
            html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header text-left"></h3><div class="popover-body text-justify"></div></div>'
    });
});

function checkGname(){
var x = document.getElementById("group_name").value;
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("gnameR").innerHTML = this.responseText;
                     var rt = this.responseText;
                if(rt!="")
                 { document.getElementById("group_name").value="";}
            }
        };
        xmlhttp.open("GET", "getGname2.php?x=" + x, true);
        xmlhttp.send();

}

</script>
</html>