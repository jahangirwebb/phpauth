<?php

inlcude('config.php');

if(!isset($_SESSION['logged_in'])){
  header('location: ../login.php');
  exit();
}



 ?>
