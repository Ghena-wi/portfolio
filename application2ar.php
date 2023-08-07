


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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>


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
                             <li class="nav-item text-right" role="presentation" style="font-size: 25px;"><a class=" btn btn-link " href="https://onlinefse.com/application2.php?la=eng" style="color: rgb(255,255,255);font-family: Cairo, sans-serif;font-size: 20px;">English</a></li>
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
            <form class="text-center border rounded shadow" method="POST" action="app2session.php">
                <h1 style="font-family: Cairo, sans-serif;font-size:30px;color: rgb(80,94,108);">نموذج تسجيل مجموعة من 4 طلبة<h1>
                  <h5 style="font-family: Cairo, sans-serif;color: rgb(80,94,108);"> بيانات الطلبة</h5>
                   <hr>
              
        
                <div style="height: 33px;"></div>
                <div class="form-row">
                    <div class="col col-12 col-lg-6 col-md-6 order-xs-12 order-lg-1 order-md-1" style="padding: 10px;">
                        <div style="height: 33px;"></div>
                        <div class="form-group text-right"><label style="color: #282821;">إسم المجموعة</label><input class="form-control text-right" type="text" name="group_name" id="group_name" required="" onfocusout="checkGname()">
                        <p id="gnameR" style="color:red;"></p>
                        </div>
                        <div style="height: 33px;"></div>
                        <div class="form-group text-right"><label style="color: #282821;">ما البرنامج الذي ترغبون &nbsp;في التسجيل به ؟</label>
                         <!--<p style="font-size:14px;">ملاحظة: يوجد إختبار لاحق للتأكد من ان المستوى مناسب للبرنامج المختار</p>-->
                            <div> <div id="beginnerPop" class="mb-2">        
        <button  type="button"  data-trigger="focus"  class="btn btn-link" data-toggle="popover"  data-placement="bottom"  data-content="يمكن للطالب فهم واستخدام التعبيرات اليومية المألوفة والعبارات الأساسية للغاية بحيث يمكنه تقديم نفسه / نفسها ، ويمكنه طرح أسئلة حول التفاصيل الشخصية والإجابة عنها، كذلك يمكن الطالب من التفاعل بطريقة بسيطة مع شخص اخر"
        >؟</button>
       
    </div>
                                <p class="d-inline-flex" style="margin: 5px;font-size: 13px;">مبتدئ</p><input type="radio" name="chosen_level" value="beginner" required=""></div>
                            <div> <div id="interPop" class="mb-2">        
        <button  type="button"   data-trigger="focus" class="btn btn-link" data-toggle="popover" data-placement="bottom"  data-content="يمكن للطالب فهم النقاط الرئيسية الواضحة بشأن الأمور المألوفة التي تتم مواجهتها بإنتظام في العمل والمدرسة والترفيه وما إلى ذلك. يمكن أن يتعامل مع معظم المواقف التي يحتمل أن تنشأ أثناء السفر في منطقة يتم فيها التحدث باللغة. يمكن أن ينتج نصًا بسيطًا متصلًا حول مواضيع مألوفة أو ذات أهمية شخصية "
        >؟</button>
       
    </div>
                                <p class="d-inline-flex" style="margin: 5px;font-size: 13px;">متوسط</p><input type="radio" name="chosen_level" value="intermediate"></div>
                                
                            <div>
                                 <div id="advancedPop" >        
        <button type="button"  data-trigger="focus" class="btn btn-link" data-toggle="popover"   data-placement="bottom"  data-content="يمكن للطالب أن يفهم مجموعة واسعة من النصوص الطويلة والتعرف على المعنى الضمني. يمكنه التعبير عن نفسه بطلاقة وتلقائية دون البحث عن التعبيرات. يمكن استخدام اللغة بمرونة وفعالية لأغراض اجتماعية وأكاديمية ومهنية. يمكن أن ينتج نصًا واضحًا منظمًا جيدًا ومفصلًا حول الموضوعات المعقدة "
        >؟</button>
       
    </div>
                       
                                
                                
                          
                                <p
                                    class="d-inline-flex" style="margin: 5px;font-size: 13px;">متقدم</p><input type="radio" name="chosen_level" value="advanced"></div>
                        </div>
                        
                             

         
                    </div>
                    <div class="col col-12 col-lg-6 col-md-6 order-1 order-lg-12 order-md-12" style="padding: 10px;">
                        <div role="tablist" id="accordion-1">
                           <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse"  aria-expanded="true" aria-controls="accordion-1 .item-1" href="div#accordion-1 .item-1" style="font-family: Cairo, sans-serif;color: #0038a8;">بيانات الطالب 1</a></h5>
                                </div>
                                <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1" >
                                    <div class="card-body">
                                        <div class="form-group text-right"><label style="color: #282821;">إسم الطالب</label><input class="form-control text-right" type="text" name="first_name1" required="" placeholder="الإسم الأول "></div>
                                        <div class="form-group text-right"><input class="form-control text-right" type="text" name="last_name1" required="" placeholder="اللقب"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">تاريخ الميلاد</label><input class="form-control text-center" type="date" name="bday1" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">الجنس</label>
                                            <div><label style="margin: 5px;">ذكر</label><input type="radio" name="gender1" value="male" required=""></div>
                                            <div><label style="margin: 5px;">أنثى</label><input type="radio" name="gender1" value="female"></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">رقم الهاتف</label><input class="form-control d-inline-flex" type="tel" name="phone_num1" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label style="color: #282821;">البريد الإلكتروني</label><input class="form-control" type="email" name="email1" required=""></div>
                                        <div style="height: 33px;"></div>
                        <div class="form-group text-right"><label style="color: #282821;">البلد</label>
                          <input class="form-control text-right" type="text" name="Country1" required="" placeholder="البلد"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-right"><label style="color: #282821;">العنوان</label><input class="form-control text-right" type="text" name="city1" required="" placeholder="إسم المدينة">
                                                 </div><div class="form-group text-right">
                                    <input class="form-control text-right" type="text" name="postal1" placeholder="الرمز البريدي "  required="" ></div>
                                    <div style="height: 33px;"></div>
                                  
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
                              <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="div#accordion-1 .item-2" style="font-family: Cairo, sans-serif;color: #0038a8;"  >بيانات الطالب 2</a></h5>
                                </div>
   
                                <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1" >
                                    <div class="card-body" >
              
                                        <div class="form-group text-right"><label style="color: #282821;" >إسم الطالب</label><input class="form-control text-right" type="text" name="first_name2" required="" placeholder="الإسم الأول "></div>

 

<!--}-->
<!--//   ScrollReveal().reveal('#student2', { delay: 1000 })-->
<!--//     ScrollReveal().reveal('#carouselCon', { delay: 1000 })-->
<!--</script>-->
                                        <div class="form-group text-right"><input class="form-control text-right" type="text" name="last_name2" required="" placeholder="اللقب"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">تاريخ الميلاد</label><input class="form-control text-center" type="date" name="bday2" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">الجنس</label>
                                            <div><label style="margin: 5px;">ذكر</label><input type="radio" name="gender2" value="male" required=""></div>
                                            <div><label style="margin: 5px;">أنثى</label><input type="radio" name="gender2" value="female"></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">رقم الهاتف</label><input class="form-control d-inline-flex" type="tel" name="phone_num2" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label style="color: #282821;">البريد الإلكتروني</label><input class="form-control" type="email" name="email2" required=""></div>
                                        <div style="height: 33px;"></div>
                        <div class="form-group text-right"><label style="color: #282821;">البلد</label>
                          <input class="form-control text-right" type="text" name="Country2" required="" placeholder="البلد"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-right"><label style="color: #282821;">العنوان</label><input class="form-control text-right" type="text" name="city2" required="" placeholder="إسم المدينة">
                                                 </div><div class="form-group text-right">
                                       <input class="form-control text-right" type="text" name="postal2"  required=""  placeholder="الرمز البريدي "></div>
                                    <div style="height: 33px;"></div>
                                  
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="div#accordion-1 .item-3" style="font-family: Cairo, sans-serif;color: #0038a8;">بيانات الطالب 3</a></h5>
                                </div>
                                <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-right"><label style="color: #282821;">إسم الطالب</label><input class="form-control text-right" type="text" name="first_name3" required="" placeholder="الإسم الأول "></div>
                                        <div class="form-group text-right"><input class="form-control text-right" type="text" name="last_name3" required="" placeholder="اللقب"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">تاريخ الميلاد</label><input class="form-control text-center" type="date" name="bday3" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">الجنس</label>
                                            <div><label style="margin: 5px;">ذكر</label><input type="radio" name="gender3" value="male" required=""></div>
                                            <div><label style="margin: 5px;">أنثى</label><input type="radio" name="gender3" value="female"></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">رقم الهاتف</label><input class="form-control d-inline-flex" type="tel" name="phone_num3" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label style="color: #282821;">البريد الإلكتروني</label><input class="form-control" type="email" name="email3" required=""></div>
                                        <div style="height: 33px;"></div>
                     <div class="form-group text-right"><label style="color: #282821;">البلد</label>
                          <input class="form-control text-right" type="text" name="Country3" required="" placeholder="البلد"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-right"><label style="color: #282821;">العنوان</label><input class="form-control text-right" type="text" name="city3" required="" placeholder="إسم المدينة">
                                                 </div><div class="form-group text-right">
                                      <input class="form-control text-right" type="text"  required=""  name="postal3" placeholder="الرمز البريدي "></div>
                                    <div style="height: 33px;"></div>
                                   
                                    <div style="height: 33px;"></div>
                                </div>
                            </div>
                        </div>
             <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4" href="div#accordion-1 .item-4" style="font-family: Cairo, sans-serif;color: #0038a8;">بيانات الطالب 4</a></h5>
                                </div>
                                <div class="collapse item-4" role="tabpanel" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <div class="form-group text-right"><label style="color: #282821;">إسم الطالب</label><input class="form-control text-right" type="text" name="first_name4" required="" placeholder="الإسم الأول "></div>
                                        <div class="form-group text-right"><input class="form-control text-right" type="text" name="last_name4" required="" placeholder="اللقب"></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">تاريخ الميلاد</label><input class="form-control text-center" type="date" name="bday4" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">الجنس</label>
                                            <div><label style="margin: 5px;">ذكر</label><input type="radio" name="gender4" value="male" required=""></div>
                                            <div><label style="margin: 5px;">أنثى</label><input type="radio" name="gender4" value="female"></div>
                                        </div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label class="text-right" style="color: #282821;">رقم الهاتف</label><input class="form-control d-inline-flex" type="tel" name="phone_num4" required=""></div>
                                        <div style="height: 33px;"></div>
                                        <div class="form-group text-right"><label style="color: #282821;">البريد الإلكتروني</label><input class="form-control" type="email" name="email4" required=""></div>
                                        <div style="height: 33px;"></div>
                         <div class="form-group text-right"><label style="color: #282821;">البلد</label>
                          <input class="form-control text-right" type="text" name="Country4" required="" placeholder="البلد"> 
                          
                       
                        
                        </div>
                                        <div
                                            style="height: 33px;"></div>
                                    <div class="form-group text-right"><label style="color: #282821;">العنوان</label><input class="form-control text-right" type="text" name="city4" required="" placeholder="إسم المدينة">
                                                 </div><div class="form-group text-right">
                                      <input class="form-control text-right" type="text" name="postal4"  required=""  placeholder="الرمز البريدي "></div>
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
        xmlhttp.open("GET", "getGname.php?x=" + x, true);
        xmlhttp.send();

}
</script>
</html>