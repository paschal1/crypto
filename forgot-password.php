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

      <section class="page__title-area page__title-height page__title-overlay d-flex my-bg align-items-center" data-background="assets/img/page-title/page-title-3.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Reset Password</h3>                         
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
                        <h3 class="section__title">We'll send you an email</h3>
                     <p>Enter the email you used to sign-up.</p>
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
                  if(isset($_POST['forgot-pwd'])){
                    $email = $_POST['email'];
                    if(empty($email)){
                        $error['email'] = "Email is required";
                    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $error['email'] = "Invalid email format";
                    }
                    if(count($error) === 0){
                        $query = mysqli_query($connection, "SELECT email FROM users WHERE email='$email'");
                        $db = mysqli_fetch_array($query);
                        $db_email = $db['email'];
                        $db_name = $db['username'];
                        $token = $db['token'];
                        if(mysqli_num_rows($query) === 0){
                            echo "<script>alert('We could't find your email')</script>";
                        }else{
                            $to = $db_email;
                            $subject = "Password reset";
                            $message = "
                            <html>
                            <head>
                            <title>{$subject}</title>
                            </head>
                            <body>
                            <p><strong>Dear $db_name,</strong></p>
                            <p>Forgot Password? Not a problem. Click below link to reset your password.</p>
                            <p><a href='{$base_url}reset_password.php?token=$token'>Reset Password</a></p>
                            </body>
                            </html>
                            ";
                    
                          // Always set content-type when sending HTML email
                          $headers = "MIME-Version: 1.0" . "\r\n";
                          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        
                          // More headers
                          $headers .= "From: ". $my_email;
                          if(mail($to,$subject,$message,$headers)) {
                            echo "<script>alert('We have sent a reset password link to your email - {$email}.');</script>";
                          }else {
                            echo "<script>alert('Mail not sent. Please try again.');</script>";
                           // header("Location: login.php");
                          }
                        }
                    }
                }
                  ?>              <h5>Email</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="e-mail address" autocomplete="off" name="email" value="<?php if(isset($_POST['forgot-pwd'])){echo $email ;} ?>">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['forgot-pwd'])){echo $error['email'];} ?></small>
                              </div>
                              
                               <br>
                              <button class="e-btn w-100" name="forgot-pwd">Send Email</button>
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

