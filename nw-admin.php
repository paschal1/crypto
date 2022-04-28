<?php
 include('config/config.php');

 if(!isset($_SESSION['email'])){
    echo "<script>window.open('login', '_SELF')</script>";
 }
//  else{
//     echo "<script>window.open('login_checkout', '_SELF')</script>";
//  }
   
 