<?php



session_start();

if(!isset($_SESSION['products'])){
	$products=array("tshirt"=>200 , "shirt"=>80 , "pantalon"=>220 , "shoes"=>120 , "short"=>90 , "jacket"=>60 , "glasses"=>80 , "sunglasses"=>100 ,"a"=>10);
$_SESSION['products']=$products;
}


$search = $_GET['search'];

foreach($_SESSION['products'] as $p =>$s){
	
	if (strpos($p, $search) !== FALSE) {
		echo "product is ".$p." salary is ".$s."<br>"."<br>"."<br>" ;
		
	}

}

krsort($_SESSION['products']);
foreach($_SESSION['products'] as $p =>$s){
   {
   echo  $p . " = " .$s;
   echo "<br>";
   }
}	
echo "<br>"."<br>"."<br>";

ksort($_SESSION['products']);
foreach($_SESSION['products'] as $p =>$s){
   {
   echo  $p . " = " .$s;
   echo "<br>";
   }
}	
echo "<br>"."<br>"."<br>";


arsort($_SESSION['products']);
foreach($_SESSION['products'] as $p =>$s){
   {
   echo  $p . " = " .$s;
   echo "<br>";
   }
}	

echo "<br>"."<br>"."<br>";
	
asort($_SESSION['products']);
foreach($_SESSION['products'] as $p =>$s){
   {
   echo  $p . " = " .$s;
   echo "<br>";
   }
}	








