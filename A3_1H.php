<?php

session_start();

if(isset($_SESSION["email"]))
{
	
$discount=0;
$price= $_GET["price"];
$numberOfProduct=$_GET["numberOfProduct"];

  if( is_numeric($price) && is_numeric($numberOfProduct))
  {
   
  
if($price<0 ||$numberOfProduct<0){
	
	echo "enter positive values ";

}
else{
$total=$price*$numberOfProduct;
echo "your price equal ".($total)."<br>";
if ($total>=1000){
	$discount =  $total-$total*15/100 ;
}
else 	
	$discount =   $total- $total*15/100;

echo"your price after discount equal ".($discount);
}

 }
 else {
	 echo "enter number values";
   }
}

else{
  echo " login "."<a href='A3_2.php'> here <a/>";
} 
  