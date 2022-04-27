<?php
session_start();
 include('config/config.php');

 if(!isset($_SESSION['user_id'])){
    echo "<script>window.open('login', '_SELF')</script>";
 }
//  else{
//     echo "<script>window.open('login_checkout', '_SELF')</script>";
//  }
   
 