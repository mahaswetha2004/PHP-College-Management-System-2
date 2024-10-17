<?php

   // Start the session
   session_start();
   
   // Destroy all session variables
   session_unset();
   
   // Destroy the session
   session_destroy();
   
   // Optionally clear cookies if you set them during login
   if (isset($_COOKIE['PHPSESSID'])) {
       setcookie('PHPSESSID', '', time() - 3600, '/');
   }
   
   // Redirect to login page or home page
   header("Location: index.php");
   exit;
   ?>
   
