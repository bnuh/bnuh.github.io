<?php 
session_start(); 
include("passwords.php"); 

if ($_POST["ac"]=="log") { /// do after login form is submitted  
     if ($USERS[$_POST["username"]]==$_POST["password"]) { 
          $_SESSION["logged"]=$_POST["username"]; 
     } else { 
          echo 'Incorrect username/password. Please, try again.'; 
     }; 
};

if (array_key_exists($_SESSION["logged"],$USERS)) { //// check if user is logged or not  
     echo "<script> location.href='login.php'; </script>";
     exit;
} 

else { 
     echo '<div id="fullscreen_bg" class="fullscreen_bg"/>';
     echo '<div class="container">';
     echo '<form class="form-signin" action="login.php" method="post"><input type="hidden" name="ac" value="log">';
          echo '<input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="">';
          echo '<input type="password" name="password" class="form-control" placeholder="Password" required="">';
          echo '<button class="btn btn-lg btn-primary btn-block" value="Login" type="submit">';
               echo 'Sign In';
          echo '</button>';
     echo '</form>';
     echo '</div>';
}; 
?>

<link rel="stylesheet" href="./styles/login.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />