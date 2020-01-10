<?php
function sum ($x){
	$sum=0;
	foreach($x as $a)
	$sum+=$a;
	
	return $sum;
}


$arr=array(5,12,4,8,13,9,4,1);

echo "first question = ". sum($arr)." <br>";
echo "<br>";	


//********************************************************************
function RouteBubble ($x){
	
	for ($i=0;$i < count($x)-1;$i++){
		for ($j=$i+1;$j<count($x);$j++){
				if($x[$i]<$x[$j]){
					$temp=$x[$i];
					$x[$i]=$x[$j];
					$x[$j]=$temp;
				}
	
		}
		
	}
	
	return $x;
}

$arr2=RouteBubble($arr);
echo "secound question = ";
	for ($i=0;$i < count($arr2);$i++){
	echo $arr2[$i]." ";
	
	}
echo  " <br>";
echo "<br>";	

//********************************************************************	
	function find ($x,$y){
		for ($i=0;$i < count($x);$i++){
			if($x[$i]==$y){
				echo "YES <br>";
				return;
			}
		}
		
			echo "NO <br>";
	}
	$arr3=array("shokry",1997,4.5);
	find($arr3,4.5);
	echo "<br>";	

//********************************************************************	
	function RouteBinarySearch ($x,$y){
		$min=0; $max=count($x)-1;
		for ($i=$min;$i <=$max;$i++){
			$avr=floor(($min+$max)/2);
			if($x[$i]==$y){
				echo "YES <br>";
				return;
			}
			else if($x[$avr]<=$y){
				 $min=$avr+1;
			}
			else
				$max=$avr;
		}
		
			echo "NO <br>";

	}
	$arr4=array(1,2,5,6,8,11,13,15,16,17,18,19);
		RouteBinarySearch($arr4,5);

echo "<br>";	

//********************************************************************	

function RouteRandomPass($num) { 
$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-0987654321~`/?':;L><}{\|"; 
    $randomString = ''; 
  
    for ($i = 0; $i < $num; $i++) { 
        $index = rand(0, strlen($chars) - 1); 
        $randomString .= $chars[$index]; 
    } 
  
    return $randomString; 
} 
$num=10; 
  
echo RouteRandomPass($num);




