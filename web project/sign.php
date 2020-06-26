<?php
session_start();
include'login.php';
$user=$_POST['name'];
$paasw=$_POST['password'];
if($user=$name && $paasw=$pass){
  header('location:homepage.php');
}
else{
  echo "username  password are not correct";
}
 ?>
