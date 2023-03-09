<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Inscription réussi'); </script>";
  }
  elseif($result == 10){
    echo
    "<script> alert('Le nom d'utilisateur ou l'e-mail a déjà été pris'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Le mot de passe ne correspond pas'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style\style02.css">
  </head>
  <body>
  <div class="login-box">
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
    <div class="user-box">
      <input type="text" name="name" required value=""> <br>
      <label for="">Name : </label>
      </div>
      <div class="user-box">
      <input type="text" name="username" required value=""> <br>
      <label for="">Username : </label>
      </div>
      <div class="user-box">
      <input type="email" name="email" required value=""> <br>
      <label for="">Email : </label>
      </div>
      <div class="user-box">
      <input type="password" name="password" required value=""> <br>
      <label for="">Password : </label>
      </div>
      <div class="user-box">
      <input type="password" name="confirmpassword" required value=""> <br>
      <label for="">Confirm Password : </label>
      </div>
      <a>
      <button  type="submit" name="submit"> Register</button> 
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      </a>
      <a href="login.php">Login</a>
    </form>
    <br> <br>
    </div>
  </body>
</html>