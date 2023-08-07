
<!DOCTYPE html>
<html style="filter: brightness(103%);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Plans</title>
    <?php
    include("headLinks.html");
    ?>
    
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <link rel="stylesheet" href="jquery-canvas-sparkles.min.js">
         <link rel="stylesheet" href="jquery-canvas-sparkles.js">
              <script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
      
<style>



#starshine {
 display: contents;
 
  height: 100%;
  z-index: 1;
  overflow: hidden;
}    
    
.shine {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
 background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAJYCAMAAACJuGjuAAADAFBMVEX///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+/LkhhAAAA/3RSTlMAAQIDBAUGBwgJCgsMDQ4PEBESExQVFhcYGRobHB0eHyAhIiMkJSYnKCkqKywtLi8wMTIzNDU2Nzg5Ojs8PT4/QEFCQ0RFRkdISUpLTE1O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);
background-repeat: no-repeat;
background-position:center;
background-size: 100% 100%;
  overflow: hidden;
  z-index: 2;
  color: tansparent;
  -moz-opacity: 0.0;
  opacity: 0.0;
  animation: glitter 4s linear 0s infinite normal;
  -webkit-animation: glitter 4s linear 0s infinite normal;
  -moz-animation: glitter 4s linear 0s infinite normal;
  -ms-animation: glitter 4s linear 0s infinite normal;
  -o-animation: glitter 4s linear 0s infinite normal;
}

.shine.small {
  width: 20px;
  height: 20px;
}

.shine.medium {
  width: 30px;
  height: 30px;
}

.shine.large {
  width: 40px;
  height: 40px;
}

/*CSS3 keyframes for glittering effect*/
@-webkit-keyframes glitter {
  0% {
    -webkit-transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }
  25% {
    -webkit-transform: scale(0.7) rotate(0deg);
    opacity: 1;
  }
  50% {
    -webkit-transform: scale(0.9) rotate(0deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(0.5) rotate(0deg);
    opacity: 0;
  }
}


 @media (max-width: 1190px) {
      h1{
           font-size: 28px !important;
      }
        h2 {
  font-size: 25px !important;
 
      }
      h3,h4,h5 {
  font-size: 22px !important;
 
      }
          font-size: 16px !important;
      }
      #yellowRegB{
          /*left:30% !important;*/
      }
  
      .regb{
          font-size: 16px !important; 
      }
  
      
    }
     @media (max-width: 990px) {
          #yellowRegB{
          /*left:28% !important;*/
      }
           h3,h4,h5 {
  font-size: 26px !important;
 
      }
     }
        @media   (min-width: 1000px) and (max-width: 1184px) {
          #yellowRegB{
          left:12% !important;
      }

     }
          @media   (min-width: 990px) and (max-width: 999px) {
          #yellowRegB{
          left:13% !important;
      }

     }
             @media   (max-width: 989px) {
          #yellowRegB{
          left:25% !important;
      }

     }
           @media   (max-width: 767px) {
          #yellowRegB{
          left:30% !important;
      }

     }
         @media   (max-width: 570px) {
          #yellowRegB{
          left:35% !important;
      }

     }
          @media   (max-width: 505px) {
          #yellowRegB{
          left:33% !important;
      }

     }
          @media   (max-width: 450px) {
          #yellowRegB{
          left:30% !important;
      }

     }
        
       @media   (max-width: 375px) {
          #yellowRegB{
          left:27% !important;
      }

     }
     
</style>
</head>

<body style="font-family: 'Cairo'; ">
 
    <div style="position: static;font-family: 'Cairo';background-image: url(&quot;assets/img/coursesHeading.jpg&quot;);background-position: bottom;padding-top: 0px;height: auto;background-size: cover;">
         
  
  <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean" style="background-color: rgba(255,255,255,0)!important;opacity: 1;margin: 0px;">
                <div class="container"> <a class="navbar-brand" href="https://onlinefse.com/index.php" style="font-size: 42px;color: rgb(255,255,255);">   <!-- Logo Image -->
      <img src="assets/img/icon3.png" width="100px" alt="" class="d-inline-block align-middle mr-2">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold"></span></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="color: white!important;"><span class="sr-only" style="color: rgb(255,255,255);">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(248,248,248)!important;filter: brightness(115%) contrast(74%);"></span></button>
                    <div
                        class="collapse navbar-collapse text-right d-md-flex justify-content-md-end" id="navcol-1">
                        <ul class="nav navbar-nav text-right">
                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class=" btn btn-link " href="https://onlinefse.com/plans.php?la=eng" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">English</a></li>
                            <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/contactUs.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">تواصل معنا</a></li>
                               <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/plans.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">تسجيل</a></li>
                               <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class="nav-link " href="https://onlinefse.com/index.php" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">الرئيسية</a></li>
                           
                        </ul>
                </div>
        </div>
        </nav>
         <div class="container hero">
            <div class="row text-right d-xl-flex justify-content-xl-end">
                <div class="col-12 col-lg-6 col-xl-6 offset-xl-1" style="padding: 40px 40px 48px 0px;margin: 5px 0px;">
                    <h1 style="font-family: Cairo, sans-serif;">تسجيل طالب</h1>
                    <div style="height: 21px;"></div>
                    <h3 class="text-right d-xl-flex" style="font-family: Cairo, sans-serif;color: #0038a8;">لتعلم اللغة الإنجليزية مباشرة عن طريق الإنترنت من قبل معلمين متخصصين</h3>
                    <div style="height: 21px;"></div>
                    <h3 style="font-family: Cairo, sans-serif;color: #0038a8;">! إختر خطة و باشر في التسجيل الآن</h3>
                </div>
            </div>
        </div>
    </div>
  <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div style="padding: 62px;">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
      
        <div class="container" style="margin-bottom:70px;">
            <div class="row justify-content-sm-center">
               <div class="col col-12 col-md-6 col-lg-3 col-sm-9 order-4 order-md-3 order-lg-1 plans" style=" overflow: hidden;">
    <div class="template shine" ></div>
                <div id="plan4">
                  
                 <div style="padding: 20px;background-color: #f4e287;height: 155px;align-items: center;justify-content: center;display: flex-inline;">
       <h4 class="text-center" style="color:#fca311;font-family: Cairo, sans-serif;">
  
 عند التسجيل في 3 مستويات
 
  </h4>
<h4 class="text-center" style="color: #fca311;font-family: Cairo, sans-serif;font-size:30px;">

  عرض خاص
 
  
</h4>
     
</div>
                    <div class="card shadow">
                       
                        <div class="card-body text-center border rounded" style="color: white;padding: 20px;background-color:#fca311;height: 450px;"><img src="assets/img/1person2.png" style="width: 100px;height: 100px;margin: 21px;">
                                <div class="row justify-content-center">
    <div class="col-auto">
        <h2 style="font-family: Cairo, sans-serif;">طالب واحد</h2>
    </div>
  
</div>
                            <hr>
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;"></h4>
                           
                                                <div class="row justify-content-center">
                                    
    <div class="col-auto">
        <h4 style="font-family: Cairo, sans-serif;">مستويات</h4>
    </div>
    <div class="col-auto">
        <h4 style="font-family: Cairo, sans-serif;">3</h4>
    </div>
</div>
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;">$750</h4>
                          
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;"></h4><a class="btn btn-light active text-white shadow-lg regb" role="button" href="https://onlinefse.com/application4.php" style="font-size: 20px;font-weight: 100;background-color:white;color:#fca311!important;font-family: Cairo, sans-serif;padding: 15px 50px;margin-top: 25px;position: absolute;z-index:5; left:20% ;" id="yellowRegB">تسجيل</a></div>
                    </div>
                 
                </div></div>
                <div class="col col-12 col-md-6 col-lg-3 col-sm-9 order-3 order-md-4 order-lg-2 plans" id="plan3">
                       <div style="padding: 20px;background-color: #dddbd1;height: 155px;align-items: center;justify-content: center;display: flex-inline;">
   <h4 class="text-center" style="color:#96938e;font-family: Cairo, sans-serif;">
  
 عند تسجيل مجموعة من 8 طلبة
 
  </h4>
<h4 class="text-center" style="color: #96938e;font-family: Cairo, sans-serif;font-size:30px;">

   %خصم 30
 
  
</h4>
     
</div>
                    <div class="card shadow">
                        <div class="card-body text-center border rounded lz-animation" style="background-color:#96938e;color: rgb(255,255,255);height: 450px;"><img src="assets/img/9people.png" style="width: 130px;height: 100px;margin: 21px;">
                                                  <div class="row justify-content-center">
                                                   
    <div class="col-auto">
        <h2 style="font-family: Cairo, sans-serif;">طلبة</h2>
    </div>
    <div class="col-auto">
        <h2 style="font-family: Cairo, sans-serif;">8</h2>
    </div>
</div>
                            
                            
      

                            <hr>
                         
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;">مستوى واحد</h4>
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;">$300 للطالب</h4>
                           
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;"></h4><a class="btn btn-light active text-white shadow-lg regb" role="button" href="https://onlinefse.com/application3.php" style="font-size: 20px;font-weight: 100;background-color: white;font-family: Cairo, sans-serif;padding: 15px 50px;margin-top: 25px;color: #96938e!important;" >تسجيل</a></div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-3 col-sm-9 order-2 order-md-1 order-lg-3 plans" id="plan2">
                   <div style="padding: 20px;background-color: rgba(196,229,142,0.49);height: 155px;align-items: center;justify-content: center;display: flex-inline;">
   
     
     
       <h4 class="text-center" style="color:#8cd600;font-family: Cairo, sans-serif;">
  
 عند تسجيل مجموعة من 4 طلبة
 
  </h4>
<h4 class="text-center" style="color: #8cd600;font-family: Cairo, sans-serif;font-size:30px;">

   %خصم 20
 
  
</h4>


</div>
                    <div class="card shadow">
                        <div class="card-body text-center border rounded" style="background-color: #8cd600;color: rgb(255,255,255);height: 450px;"><img src="assets/img/4people.png" style="width: 130px;height: 100px;margin: 21px;">
                            <div class="row justify-content-center">
    <div class="col-auto">
        <h2 style="font-family: Cairo, sans-serif;">طلبة</h2>
    </div>
    <div class="col-auto">
        <h2 style="font-family: Cairo, sans-serif;">4</h2>
    </div>
   
</div>
                            <hr>
                          
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;">مستوى واحد</h4>
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;">$300 </h4>
                           
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;"></h4><a class="btn btn-light active text-white shadow-lg regb" role="button" href="https://onlinefse.com/application2.php" style="font-size: 20px;font-weight: 100;background-color: white;color:#8cd600!important;font-family: Cairo, sans-serif;padding: 15px 50px;margin-top: 25px;">تسجيل</a></div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-3 col-sm-9 order-1 order-md-2 order-lg-4 plans" id="plan1">
                            <div style="padding: 20px;background-color: #c4d8e2;height: 155px;align-items: center;justify-content: center;display: flex-inline;">
    
  <h4 class="text-center" style="color: #0051ba;font-family: Cairo, sans-serif;">
  
   عند تسجيل طالب منفرد
 
  </h4>
<h4 class="text-center" style="color: #0051ba;font-family: Cairo, sans-serif;font-size:30px;">
     %خصم 10
</h4>
</div>
                    <div class="card shadow">
                        <div class="card-body text-center border rounded" style="background-color: #0051ba;color: rgb(255,255,255);height: 450px;"><img src="assets/img/1person2.png" style="width: 100px;height: 100px;margin: 21px;">
                                         <div class="row justify-content-center">
    <div class="col-auto">
        <h2 style="font-family: Cairo, sans-serif;">طالب واحد</h2>
    
        
    </div>
  
</div>
                            <hr>
                         
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;">مستوى واحد</h4>
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;">$300</h4>
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;"></h4>
                         
                            <h4 class="card-title" style="font-family: Cairo, sans-serif;"></h4><a class="btn btn-light active text-white shadow-lg regb" role="button" href="https://onlinefse.com/application1.php" style="font-size: 20px;font-weight: 100;background-color: white;color:#0051ba!important;font-family: Cairo, sans-serif;padding: 15px 50px;margin-top: 25px;">تسجيل</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
       include("footer.html");
       ?>
 
</body>

<script>

$(document).ready(function(){
ScrollReveal().reveal('#plan1');
ScrollReveal().reveal('#plan2', { delay: 300 });
ScrollReveal().reveal('#plan3', { delay: 500 });
ScrollReveal().reveal('#plan4', { delay: 700 });
});


    $(function() {
  var body = $('#plan4'),
      template = $('.template.shine'),
      stars =  400,
      sparkle = 20;
  
    
  var size = 'small';
  var createStar = function() {
    template.clone().removeAttr('id').css({
      top: (Math.random() * 100) + '%',
      left: (Math.random() * 100) + '%',
      webkitAnimationDelay: (Math.random() * sparkle) + 's',
      mozAnimationDelay: (Math.random() * sparkle) + 's'
    }).addClass(size).appendTo(body);
  };
 
  for(var i = 0; i < stars; i++) {
    if(i % 2 === 0) {
      size = 'small';
    } else if(i % 3 === 0) {
      size = 'medium';
    } else {
      size = 'large';
    }
    
    createStar();
  }
});
</script>
    

</html>