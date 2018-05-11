<?php
/**
 * ########################
 * php 实现鸡尾酒排序算法
 * @author http://phpff.com  2014/12/29
 */
function cocktailSort($my_array)
 {
	
	do{
		$swapped = false;
		for($i=0;$i<count($my_array);$i++){
			if(isset($my_array[$i+1])){
				if($my_array[$i] > $my_array[$i+1]){
					list($my_array[$i], $my_array[$i+1]) = array($my_array[$i+1], $my_array[$i]);
					$swapped = true;
				}
			}			
		}
 
		if ($swapped == false) break;
 
		$swapped = false;
		for($i=count($my_array)-1;$i>=0;$i--){
			if(isset($my_array[$i-1])){
				if($my_array[$i] < $my_array[$i-1]) {
					list($my_array[$i],$my_array[$i-1]) = array($my_array[$i-1],$my_array[$i]);
					$swapped = true;
				}
			}
		}
		echo implode(', ',$my_array )."\n";

	}while($swapped);
 
	return $my_array;
}
$test_array = array(20, 40, 60, 80, 30, 70, 90, 10, 50, 0);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array:\n";
echo implode(', ',cocktailSort($test_array)). PHP_EOL;

//https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-7.php