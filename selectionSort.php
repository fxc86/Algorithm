<?php
/**
 * ########################
 * php 实现选择排序算法
 * @author http://phpff.com  2014/12/29
 */
function selectionSort($array){
    $count=count($array);
    for($i=0;$i<$count-1;$i++){
        /*findtheminest*/
        $min=$i;
        echo'$min-->'.$array[$min].'-->'.PHP_EOL;
        for($j=$i+1;$j<$count;$j++){
            //由小到大排列
            if($array[$min]>$array[$j]){
                //表明当前最小的还比当前的元素大
                $min=$j;
                //赋值新的最小的
            }
        }
        echo$array[$min].PHP_EOL;
        /*swap$array[$i]and$array[$min]即将当前内循环的最小元素放在$i位置上*/
        if($min!=$i){
            $temp=$array[$min];
            $array[$min]=$array[$i];
            $array[$i]=$temp;
        }
    }
    return$array;
}

$test_array = array(20, 40, 60, 80, 30, 70, 90, 10, 50, 0);
echo implode(', ',selectionSort($test_array)). PHP_EOL;

