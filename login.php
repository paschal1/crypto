<?php 
 include('config/config.php');
include ('includes/login_header.php');

 ?>
<?php //include //('config/config.php'); 

?>

      <!-- header area end -->

      <!-- cart mini area start -->
      
      <div class="body-overlay"></div>
      <!-- cart mini area end -->


      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <!-- <img src="assets/img/logo/logo.png" alt="logo"> -->
                  </a>
               </div>
               <div class="mobile-menu fix"></div>

               
               
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>

      <section class="page__title-area page__title-height page__title-overlay d-flex my-bg align-items-center" data-background="assets/img/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Login</h3>                         
                        <nav aria-label="breadcrumb mt-5 pt-5 my-margin">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index">Login</a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section> 

         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55">
                        <h3 class="section__title">Sign-in</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                        </div>
                        <div class="sign__form">
                           
                         
    
                           <form action="" method="POST">
      <?php 
 
  $error = [];
  error_reporting(0);
if(isset($_POST['login-btn'])){
     $password = $_POST['password'];
     $email = $_POST['email'];
     if(empty($email)){
         $error['email'] = "Email is required";
     }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error['email'] = "Invalid email format";
     }if(empty($password)){
         $error['password'] = "Password is required";
     } if(count($error) === 0){
         $sql = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' LIMIT 1");
         $row = mysqli_fetch_array($sql);
       $db_password = $row['password'];
        $db_email = $row['email'];
         $hashedpwd = md5($password);
         $db_id = $row['id'];
         if($db_password === $hashedpwd && $email === $db_email){
            $_SESSION['user_id'] = $db_id;
            $_SESSION['email'] = $db_email;
            echo "<script>window.open('dashboard', '_SELF')</script>";
         }else{
            echo "<script>alert('Account permanently blocked')</script>";
            echo "<script>window.open('index', '_SELF')</script>";
        }
     }
        
     }    
 ?>                        
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Email</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="e-mail address" autocomplete="off" name="email" value="<?php if(isset($_POST['login-btn'])){echo $email ;} ?>">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['login-btn'])){echo $error['email'];} ?></small>
                              </div>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="password" placeholder="Password" autocomplete="off" name="password" value="<?php if(isset($_POST['login-btn'])){echo $password ;} ?>">
                                    <i class="fal fa-lock"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['login-btn'])){echo $error['password'];} ?></small>
                              </div>
                               <br>
                              <button class="e-btn w-100" name="login-btn">  Sign In</button>
                              <div class="sign__new text-center mt-20">
                                 <p>Don't have an account?<a href="sign-up"> Sign up</a></p>
                              </div>
                              <div class="sign__new text-center mt-20">
                                 <p><a href="forgot-password">Forgot Password?</a></p>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->
         
      </main>
      <script>
if(window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
      <?php include ('includes/footer.php'); ?>
   </body>

<!-- Mirrored from themepure.net/template/educal/educal/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 08:17:39 GMT -->
</html>

