<?php
session_start();
header('location:homepage.php');
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'user');
$name= $_POST['name'];
$pass= $_POST['password'];
$email= $_POST['email'];
$confpass= $_POST['confpassword'];
$se='select * from user_table where email="$email"';
$result = mysqli_query($con,$se);
$num = mysqli_num_rows($result);
if($num = 1){
  echo "name already acquired";
}
else{
  $reg="insert into user_table(name,email,password,confpassword) values ('$name','$email','$pass','$confpass')";
  mysqli_query($con,$reg);
  echo "registration successful";
}
if($pass != $confpass){
  echo "password not match";
}else {
  $reg="insert into user_table(name,email,password,confpassword) values ('$name','$email','$pass','$confpass')";
  mysqli_query($con,$reg);
  echo "registration successful";
}
 ?>
