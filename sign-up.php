<?php include ('config/config.php'); ?>
<?php include ('includes/login_header.php');

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
                        <h3 class="page__title">Register</h3>                         
                        <nav aria-label="breadcrumb mt-5 pt-5 my-margin">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index">Register</a></li>
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
                        <h3 class="section__title">Create an   Account</h3>
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
    if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($connection, $_POST['username']);
    $email =  mysqli_real_escape_string($connection, $_POST['email']);
    $password =  mysqli_real_escape_string($connection, $_POST['pwd']);
    $cpassword =  mysqli_real_escape_string($connection, $_POST['cpwd']);
    if(empty($name)){
        $error['username'] = "Username is required";
    }elseif(!preg_match("/^[a-zA-Z]*$/",$name)){
        $error['username'] = "Only alphabets are allowed with no spacing";
    }  // check if name contains only letters 
    if(empty($email)){
        $error['email'] = "email is required";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['email'] = "Invalid email format";
    }  
    if(empty($password)){
        $error['password'] = "Password is required";
    }elseif(strlen($password) < 4){
        $error['password'] = "Password is too short";
    }
    if(empty($cpassword)){
        $error['cpassword'] = "Confirm password is required";
    }
    
    if($password != $cpassword){
        $error['cpassword'] = "Passwords do not match";
    }
    $emailquery = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' LIMIT 1");
    if(mysqli_num_rows($emailquery) > 0){
        $error['email'] = "Email already exists";
    }
    if(count($error) === 0){
       $name  = trim($name);
       $token = md5(rand(1,50));
       $password = md5($password);
        $sql =  "INSERT INTO users (username,email,password,token) VALUES ('$name','$email','$password','$token')";
        $connection->query($sql);
        if($sql){
           echo "<script>alert('Registration Sucessful')</script>";
           echo "<script>window.open('login.php','_self')</script>";   
    }else{
      echo "<script>alert('User not registered')</script>";
    }
   
} 
    }
?>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Username</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Full name" autocomplete="off" name="username" value="<?php if(isset($_POST['submit'])){
                                                echo "$name";}
                                                ?>">
                                    <i class="fal fa-user"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['submit'])){echo $error['username'];} ?></small>
                              </div>
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
                              <div class="sign__input-wrapper mb-10 mb-5">
                                 <h5>Re-Password</h5>
                                 <div class="sign__input">
                                    <input type="password" placeholder="Re-Password" autocomplete="off" name="cpwd" >
                                    <i class="fal fa-lock"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['submit'])){echo $error['cpassword'];} ?></small>
                              </div> <br>
                              <button class="e-btn w-100" name="submit">  Sign Up</button>
                              <div class="sign__new text-center mt-20">
                                 <p>Already have an account?<a href="login"> Sign In</a></p>
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

