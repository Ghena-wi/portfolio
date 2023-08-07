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
    <div style="background-color: rgba(255,255,255,0)!important;"></div>
    <header class="masthead text-center text-white" style="position: static;font-family: 'Cairo';background-image: url(&quot;assets/img/coursesHeading.jpg&quot;);background-position: bottom;padding-top: 0px;height: 411px;background-size: cover;">
        
  
  <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean" style="background-color: rgba(255,255,255,0)!important;opacity: 1;margin: 0px;">
                <div class="container"> <a class="navbar-brand" href="https://onlinefse.com/index.php" style="font-size: 42px;color: rgb(255,255,255);">   <!-- Logo Image -->
      <img src="assets/img/icon3.png" width="100px" alt="" class="d-inline-block align-middle mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold"></span></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="color: white!important;"><span class="sr-only" style="color: rgb(255,255,255);">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(248,248,248)!important;filter: brightness(115%) contrast(74%);"></span></button>
                    <div
                        class="collapse navbar-collapse text-right d-md-flex justify-content-md-end" id="navcol-1">
                        <ul class="nav navbar-nav text-right">
                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class=" btn btn-link " href="https://onlinefse.com/application4.php?la=eng" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">English</a></li>
                            <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/contactUs.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">تواصل معنا</a></li>
                               <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/plans.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">تسجيل</a></li>
                               <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/index.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">الرئيسية</a></li>
                           
                        </ul>
                </div>
        </div>
        </nav>
    </header>
    <div class="register-photo" style="margin-top: -150px;background-color: rgba(241,247,252,0);">
        <div class="form-container">
            <form class="text-center border rounded shadow"  method="POST" action="app4session.php">
                   <h1 style="font-family: Cairo, sans-serif;font-size:30px;color: rgb(80,94,108);">نموذج تسجيل في 3 مستويات<h1>
                  <h5 style="font-family: Cairo, sans-serif;color: rgb(80,94,108);"> بيانات الطالب</h5>
                   <hr>
                <div style="height: 33px;"></div>
                <div style="height: 33px;"></div>
                <div class="form-row text-right">
                    <div class="col col-12 col-md-6 col-lg-6 order-lg-12 order-md-12">
                        <div style="height: 33px;"></div>
                        
                     
    <!--<input type="text" name="plan1" hidden>-->
                        <div class="form-group text-right"><label style="color: #282821;">إسم الطالب</label><input class="form-control text-right" type="text" name="first_name" required="" placeholder="الإسم الأول "></div>
                        <div class="form-group text-right"><input class="form-control text-right" type="text" name="last_name" required="" placeholder="اللقب"></div>
                               <div style="height: 33px;"></div>
                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">تاريخ الميلاد</label><input class="form-control text-center" type="date" name="bday" required=""></div>
                        <div style="height: 33px;"></div>
                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">الجنس</label>
                            <div><label style="margin: 5px;">ذكر</label><input type="radio" name="gender" value="male" required=""></div>
                            <div><label style="margin: 5px;">أنثى</label><input type="radio" name="gender" value="female"></div>
                        </div>
                    
                        <div style="height: 33px;"></div>
                        <div class="form-group text-right"><label style="color: #282821;">البريد الإلكتروني</label><input class="form-control" type="email" name="email" required=""></div>
                        <div style="height: 33px;"></div>
                              
                     
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6 order-lg-1 order-md-1">
                      
                        <div style="height: 33px;"></div>
                          <div class="form-group text-right"><label class="text-right" style="color: #282821;">رقم الهاتف</label><input class="form-control d-inline-flex" type="tel" name="phone_num" required=""></div>
                        <div style="height: 33px;"></div>
                       <div class="form-group text-right"><label style="color: #282821;">البلد</label>
                          <input class="form-control text-right" type="text" name="Country" required="" placeholder="البلد"> 
                          
                       
                        
                        </div>
                        <div
                            style="height: 33px;"></div>
                    <div class="form-group text-right"><label style="color: #282821;">العنوان</label>
                   <input class="form-control text-right" type="text" name="city" required="" placeholder="إسم المدينة">             </div><div class="form-group text-right">
                   <input class="form-control text-right" type="text" name="postal" required=""  placeholder="الرمز البريدي "></div>
                    <div style="height: 33px;"></div>
                 
                    <div style="height: 33px;"></div>
                    
                    
           

                            
                </div>
                
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group text-center"><button class="btn btn-light text-white text-black-50" style="font-size: 20px;font-weight: 300;background-color: rgb(255,198,30);font-family: 'Cairo';padding: 15px 50px;color: rgb(0,0,0)!important;" name="next" type="submit"  >التالي</button></div>
               
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
        title : 'مستوى المتقدم',
            html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header text-right"></h3><div class="popover-body text-justify"></div></div>'
    });
      $("#interPop button").popover({
        title : 'مستوى المتوسط',
            html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header text-right"></h3><div class="popover-body text-justify"></div></div>'
    });
      $("#beginnerPop button").popover({
        title : 'مستوى المبتدئ',
            html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header text-right"></h3><div class="popover-body text-justify"></div></div>'
    });
});
</script>
</html>