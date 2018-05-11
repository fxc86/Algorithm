<?php
$arr=array(6, 6, 2, 2, 2, 4, 1, 1, 1, 5, 5, 5, 5, 9);

$max=$arr[0];
$min=$arr[0];

foreach($arr as $val){
	if($max<$val){
		$max=$val;
	}
	if($min>$val){
		$min=$val;
	}
}

$index=array();
for($i=$min;$i<=$max;$i++){
	$index[$i]=0;	
}
foreach($arr as $val){
	if(isset($index[$val])){
		$index[$val]++;
	}
}

print_r($index);
$sort=array();
foreach($index as $key => $val){
	if($val){
		for($i=0;$i<$val;$i++){
			$sort[]=$key;	
		}
	}
}

echo implode(', ',$arr). PHP_EOL;
echo implode(', ',$sort). PHP_EOL;


//http://www.geeksforgeeks.org/pigeonhole-sort/
//
