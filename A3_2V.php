<?php
session_start();

$password =$_POST['password'];
$email=$_POST['email'];
$flag=true;

  if (empty($email)) {
   echo "Email is required";
	  $flag=false;
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format"."<br>";
	  $flag=false;
    }

  }
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);

if(!$uppercase || !$lowercase || strlen($password) < 8) {
	echo "password is not good"."<br>";
	  $flag=false;
}
if ($flag){
$email = $_POST["email"];
$password = $_POST["password"];

$_SESSION["email"]=$email;
$_SESSION["password"]=$password;

	echo "welcome user ";	
	
	echo "to buy"."<a href='A3_1.php'> here <a/>";
	
if(isset($_SESSION["email"]))
echo " to logout"."<a href='logout.php'> here <a/>";

}