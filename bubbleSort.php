<?php
/**
 * ########################
 * php 实现冒泡排序算法
 * @author http://phpff.com  2014/12/29
 */
function bubbleSort($numbers) {
    $cnt = count($numbers);
    for ($i = 0; $i < $cnt; $i++) {
        for ($j = 0; $j < $cnt - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
		echo implode(",",$numbers)."\n";
    }
 
    return $numbers;
}
 
$num = array(20, 40, 60, 80, 30, 70, 90, 10, 50, 0);
print_r(bubbleSort($num));
