<?php
/*
$q=123;

var_dump($q%10);//3
var_dump(($q/10)%10);//2
*/
//
function radixSort($arr){
    $index=array();
	for($i=0;$i<=9;$i++){
		$index[$i]=array();
	}
	
	$maxVal=$arr[0];
	foreach($arr as $val){
		if($val>$maxVal){
			$maxVal=$val;
		}
	}
	$loopNum=strlen($maxVal);

	for($i=0;$i<$loopNum;$i++){
		
		foreach($arr as $val){
			$key=($val/pow(10,$i))%10;
			$index[$key][]=$val;
		}

		$arr=array();
		foreach($index as $key=> $val){
			foreach($val as $val2){
				$arr[]=$val2;
			}
			$index[$key]=array();
		}


	}
	

	//print_r($index);
	//print_r($arr);
	return $arr;

}
$array = array(98, 85, 17, 56, 45, 14, 23, 92, 101, 80, 70, 40, 11);

echo implode(', ',radixSort($array)). PHP_EOL;

//http://algostructure.com/sorting/radixsort.php
//https://baike.baidu.com/item/%E5%9F%BA%E6%95%B0%E6%8E%92%E5%BA%8F