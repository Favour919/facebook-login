<?php
 include_once "classes/login.php";
 include_once "classes/db_connect.php";
  $con = new DBConnect;
  
    $login = new login($con ->con);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['username'];
    $pass = $_POST['password'];
            $login -> Process($username = $user, $password = $pass );
        }
   
        include "login1.php";
?>