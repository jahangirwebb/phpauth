
<?php

  include('../config.php');
  session_start();



  if(isset($_SESSION['logged_in'])){
    $Email = $_SESSION['email'];


  }else{
    header('location: ../login.php');
  }

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello <?php echo $Email ?>.</h1>


  </body>
</html>
