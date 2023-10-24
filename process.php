<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];

//create connection
$con = mysqli_connect("localhost","root","","form");
$q = "insert into registration value('$name','$email','$password','$date_of_birth','$gender')";

//check connection
if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
echo "Connected Successfully";
?>
