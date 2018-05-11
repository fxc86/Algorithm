<?php
/**
 * ########################
 * php 实现插入排序算法
 * @author http://phpff.com  2014/12/29
 */
function insertSort($arr){
	for($i=1;$i<count($arr);$i++){
		$tmp=$arr[$i];
		$key=$i-1;
		while($key>=0 && $tmp<$arr[$key]){
			$arr[$key+1]=$arr[$key];
			$arr[$key]=$tmp;
			$key--;
			//echo '-';
			//print_r($arr);
		}
		//var_dump($key+1);
		//var_dump($i);
		/*
		if(($key+1)!=$i){
			$arr[$key+1]=$tmp;
		}*/
		echo implode(', ',$arr). PHP_EOL;		
	}
	return $arr;
}

$test_array = array(20, 40, 60, 80, 30, 70, 90, 10, 50, 0);

echo implode(', ',insertSort($test_array)). PHP_EOL;
