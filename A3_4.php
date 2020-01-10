<?php
session_start();

if(isset($_SESSION["email"]))
{

$product=$_GET['product'];
$price=$_GET['price'];
$products=$_SESSION['products'];


$products[$product] = $price;
$_SESSION['products']=$products;


foreach($_SESSION['products'] as $p => $s){
	 echo  $p . " = " .$s;
   echo "<br>";
   
} 
}
else{
  echo " login "."<a href='A3_2.php'> here <a/>";
} 
  

