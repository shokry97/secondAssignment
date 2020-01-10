<?php
session_start();


if(isset($_SESSION["email"]))
{
$delete=$_GET['delete'];
	
if(isset($_SESSION["products"]))
{	
$products=$_SESSION['products'];

}
else
		$products=array("tshirt"=>200 , "shirt"=>80 , "pantalon"=>220 , "shoes"=>120 , "short"=>90 , "jacket"=>60 , "glasses"=>80 , "sunglasses"=>100 ,"a"=>10);

  unset($products[$delete]);

$_SESSION['products']=$products;




foreach($_SESSION['products'] as $p => $s){
	 echo  $p . " = " .$s;
   echo "<br>";
   
} 
}
else{
  echo " login "."<a href='A3_2.php'> here <a/>";
} 
  

