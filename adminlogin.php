 <html>
<head>
  <title>Admin Dashboard  </title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php
  include("headLinks.html");
  ?>
  
  </head>
  
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"> Admin Dashboard</h5>
            <form class="form-signin" action="checklogin.php"  method="post">
              <div class="form-label-group">
                   <label>Username</label>
               <input type="text"  name="username" placeholder="username " required  class="form-control">
               
              </div>

              <div class="form-label-group">
                     <label>Password</label>
                      <input type="password"  name="password" placeholder="password "  required  class="form-control">
             
              </div>

   <hr>
            
            <button type="submit"   class="btn btn-lg  btn-block text-uppercase" name="login_user">LOGIN</button>
          
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 <!-- <body>-->
 
 <!--<form action="checklogin.php" method="post">-->
            <!-- form-group adds proper padding if you have more than one inputs-->
 <!--     <div class="form-group">-->
 <!--       <input type="text"  name="username" placeholder="username " required>-->
 <!--     </div>-->
 <!--            <div class="form-group">-->
 <!--       <input type="password"  name="password" placeholder="password "  required>-->
      
 <!--     </div>-->
 <!--            <div class="form-group">-->
 <!--     <button type="submit"  name="login_user">LOGIN</button>-->
 <!--           </div>-->
            
 <!--   </form>-->
    
 <!--   </body>-->
    </html>