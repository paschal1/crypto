<?php 
session_start();
include ('config/config.php'); 
 include ('includes/login_header.php');

 $result = mysqli_query($connection, "SELECT * FROM users");
 if(mysqli_num_rows($result)===0){
  echo "<script>window.open('sign-up','_self')</script>";   
 }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                  <a href="index.php">
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
                        <h3 class="section__title">Login</h3>
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
    if(isset($_SESSION["locked"])){
      $difference = time() - $_SESSION["locked"];
      if($difference > 60*60){
        unset($_SESSION['locked']);
        unset($_SESSION["login_attempts"]);
      }
    }


    if(isset($_POST['submit'])){
    $email =   $_POST['email'];
    $password =  $_POST['pwd'];
    if(empty($email)){
        $error['email'] = "email is required";
    } 
    if(empty($password)){
        $error['password'] = "Password is required";
    }
    if(count($error) === 0){
      $user_pwd = md5($password);
      $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
      $row = mysqli_fetch_array($result);
       $db_password = $row['password'];
       $db_role = $row['role'];
       $db_id = $row['id'];
        $db_email = $row['email'];
       $user_role = "Admin";
      if(mysqli_num_rows($result) > 0){
       $row = mysqli_fetch_object($result);
        if($user_pwd === $db_password && $user_role === $db_role && empty($_SESSION['msg'])){
          $_SESSION['user_id'] = $db_id;
          $_SESSION['email'] = $db_email;
          echo "<script>window.open('dashboard','_self')</script>";   
        }elseif($email === $db_email && $user_role === $db_role){
         $_SESSION["msg"] = "Account Permanenty Blocked";
        }else{
          $_SESSION['login_attempts'] +=1;
         //  $_SESSION["msg"] = "Account Permanenty Blocked";
        }
      }else{
       $_SESSION['login_attempts']  +=1;
      //   $_SESSION["msg"] = "Account Permanenty Blocked";
      }
    } 
}
    
?>
                              <?php if(isset($_SESSION['msg'])){ ?>
                                 <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg> <?= $_SESSION["msg"]; ?>
                              <button type='button' class='btn-close btn-sm' data-bs-dismiss='alert' aria-label='Close'></button></div>
                              <?php unset($_SESSION["msg"]);} ?>

                              <?php  //if($_SESSION["login_attempts"] > 2){  ?>
                                <!-- <div class='alert alert-danger'>Account Permanently Blocked</div> -->
                              <?php //unset($_SESSION["msg"]) ;} ?>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Email</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="e-mail address" autocomplete="off" name="email" value="<?php if(isset($_POST['submit'])){
                                                echo "$email";}
                                                ?>">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['submit'])){echo $error['email'];} ?></small>
                              </div>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="password" placeholder="Password" autocomplete="off" name="pwd" value="<?php if(isset($_POST['submit'])){
                                                echo "$password";}
                                                ?>">
                                    <i class="fal fa-lock"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['submit'])){echo $error['password'];} ?></small>
                              </div>
                              <?php
                              if($_SESSION["login_attempts"] > 2){
                                $_SESSION['locked'] = time();
                                echo "<div class='text-danger'>Too many wrong entries, check back later.</div>";
                              }else{
                                
                              ?>
                              <button class="e-btn w-100" name="submit">Login</button>
                              <?php  } ?>
                              <div class="sign__new text-center mt-20">
                              <a href="forgot-password">Forgot Password?</a>
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
         $('#error').delay(5000).fadeOut(400)
      </script>
      <script>
if(window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
      <?php include ('includes/footer.php'); ?>
   </body>

<!-- Mirrored from themepure.net/template/educal/educal/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 08:17:39 GMT -->
</html>

