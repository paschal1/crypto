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

         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55">
                        <h3 class="section__title">Send mail</h3>
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
    if(isset($_POST['mail'])){
        $receiver_email = $_POST['email'];
        $msg = $_POST['msg'];
        if(empty($receiver_email)){
            $error['email'] = "Email cannot be empty";
        }elseif(!filter_var($receiver_email, FILTER_VALIDATE_EMAIL)){
            $error['email'] = "Invalid email format";
        }if(empty($msg)){
            $error['msg'] = "Invalid email format";
        }if(empty($error)){
            $from = "info@kykadesigns.com";
            $to =   $receiver_email;
            $subject = $msg;
            $message = "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>kykadesigns</title>
            </head>
            <body>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
            
                 <style>
                     .social-icons a {
                font-size: 16px;
                color: #203656;
            }
            
            .social-icons a:hover {
                color: #ad1deb;
            }
            
            .social-icons li:not(:last-child) {
                margin-right: 1rem;
            }
            
                 </style>
                 <div class='container'>
                     <center>
                     <div class='col-lg-12 col-xl-12 col-md-6 col-sm-6' style='margin-top:100px;'>
                     <h4 style='margin-top:0; padding-top:0;'><img src='logo.jpg' alt=' class='img-fulid' height='50px' width='50px'> info@kykadesigns.com</h4>
                     <strong style='padding-bottom:-100px; color:black;'>kykadesigns</strong>
                     <h4>{$msg}</h4>
                     <div class='contact__social pl-30'>
                        <ul class='social-icons list-unstyled list-inline mb-0 mt-5 mt-auto w-100' style='padding-top: 20px;'>
                            <li class='list-inline-item'>
                                <a href='#'><i class='fa fa-facebook-f'></i></a>
                            </li>
                            <li class='list-inline-item'>
                                <a href='#'><i class='fa fa-whatsapp'></i></a>
                            </li>
                            <li class='list-inline-item'>
                                <a href='#'><i class='fa fa-instagram'></i></a>
                            </li>
                            <!-- <li class='list-inline-item'>
                                <a href='#'><i class='fab fa-twitter'></i></a>
                            </li> -->
                        </ul>
                                       </div> <br>
                                       <h4>Follow Us</h4>
                                       <h6>help@kykadesigns.com</h6>
                                       <small><strong class='text-dark'>3481 Normandy Rd, Normandy, State Tennessee, 37360 country USA</strong></small>
                    </div>
                     </center>
                 </div>
            </body>
            </html>"
            ;
              // Always set content-type when sending HTML email
              $headers = "MIME-Version: 1.0" . "\r\n";
              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
              $headers .= "From: ". $from;
              if(mail($to,$subject,$message,$headers)) {
                echo "<script>alert('Email sucessfully sent');</script>";
              }else {
                echo "<script>alert('Mail not sent. Please try again.');</script>";
               // header("Location: login.php");
              }
            

        }
    }
  
 ?>                        
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Recepient's Email</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="e-mail address" autocomplete="off" name="email" value="<?php if(isset($_POST['send-mail'])){echo $email ;} ?>">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['send-mail'])){echo $error['email'];} ?></small>
                              </div>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Message</h5>
                                 <div class="sign__input">
                                    <textarea type="text" placeholder="Message" autocomplete="off" rows="50" cols="30" name="msg" value="<?php if(isset($_POST['Send-mail'])){echo $receiver_email ;} ?>"> </textarea>
                                    <i class="fal fa-envelope"></i>
                                 </div>
                                 <small class='text-danger small'><?php if(isset($_POST['send-mail'])){echo $error['msg'];} ?></small>
                              </div>
                               <br>
                              <button class="e-btn w-100" type="submit" name="mail">Send mail</button>
                              <div class="sign__new text-center mt-20">
                            <a href="index">Go back home</a>
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

