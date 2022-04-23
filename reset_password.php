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

      <!-- <section class="page__title-area page__title-height page__title-overlay d-flex my-bg align-items-center" data-background="assets/img/page-title/page-title-3.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Reset Password</h3>                         
                        <nav aria-label="breadcrumb mt-5 pt-5 my-margin">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index">Login</a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
                           <!-- </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>  --> 

         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55">
                        <h3 class="section__title">Reset Password</h3>
                     <p>minimum of four characters</p>
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
            error_reporting(0);
                  $error = []; 
                  if(isset($_GET['token'])){
                $token = $_GET['token'];
                $token_query = mysqli_query($connection, "SELECT * FROM users WHERE token='$token'");
                if(mysqli_num_rows($token_query) === 0){
                 echo "<script>window.open('login.php', '_SELF')</script>";
                }
                if(isset($_POST['change_password'])){
                $password = trim($_POST['pwd']);
                $cpassword = trim($_POST['cpwd']);
                if(strlen($password) < 3){
                $error['password'] = "Password must be up to four characters";
                }
                if(strlen($password) === 0){
                $error['password'] = "Password is required";
                }if(empty($cpassword)){
                  $error['cpassword'] = "Confirm Password is required";
                }
            elseif($password != $cpassword){
            $error['cpassword'] = "Passwords does not match";
            }
            if(count($error) === 0){
            $db_password = mysqli_real_escape_string($connection, md5($_POST['pwd']));
            $sql = mysqli_query($connection, "UPDATE users SET password ='$db_password' WHERE token='$token'");
            if($sql){
            echo "<script>alert('Password reset successful')</script>";
            echo "<script>window.open('index', '_SELF')</script>";
         }
     }
  //  6cb7050cdebacf15944cd4ad7809bd8b
}

}else{
    // header("Location: forgot_password.php");
  //  echo "<script>alert('Token not found')</script>";
  echo "<script>window.open('login', '_SELF')</script>";
} 
?>     <div class="sign__input-wrapper mb-25">
                  <h5>Password</h5>
                  <div class="sign__input">
                     <input type="password" placeholder="Enter Password" autocomplete="off" name="pwd" value="<?php if(isset($_POST['change_password'])){echo $password ;} ?>">
                     <i class="fal fa-envelope"></i>
                  </div>
                  <small class='text-danger small'><?php if(isset($_POST['change_password'])){echo $error['password'];} ?></small>
               </div>
               <div class="sign__input-wrapper mb-25">
                  <h5>Confirm Password</h5>
                  <div class="sign__input">
                     <input type="password" placeholder="Password" oncopy="return false" onpaste="return false" autocomplete="off" name="cpwd" value="<?php if(isset($_POST['change_password'])){echo $cpassword ;} ?>">
                     <i class="fal fa-lock"></i>
                  </div>
                  <small class='text-danger small'><?php if(isset($_POST['change_password'])){echo $error['cpassword'];} ?></small>
               </div>
                               <br>
                              <button class="e-btn w-100" name="change_password">Send Email</button>
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

