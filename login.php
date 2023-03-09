<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Mauvais mot de passe'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('L'utilisateur non enregistré'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style\style02.css">
  </head>
  <body>
  <div class="login-box">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
    <div class="user-box">
        <input type="text" name="usernameemail" required value=""> <br>
        <label for="">Username or Email : </label>
    </div>
    <div class="user-box">
        <input type="password" name="password" required value=""> <br>
      <label for="">Password : </label>
      </div>
      <a> 
      <button type="submit" name="submit"> Login</button> 
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      </a>
      <a href="registration.php">Registration</a>
    </form>
    </div>
    <br>
  </body>
</html>