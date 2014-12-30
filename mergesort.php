<?php
/**
 * ########################
 * php 实现并归排序算法
 * @author http://phpff.com  2014/12/29
 */
function my_merge($array) {
    //如果只有一个元素不需要排序直接返回
    if (count($array) <= 1) {
        return $array;
    }
    //1.计算数组中间值,注意数组索引是从0开始，银行家舍入的方法
    $middle = round(count($array) / 2, 0, PHP_ROUND_HALF_DOWN);
        
	//2.并归排序左侧数组
    $left = my_merge(array_slice($array, 0, $middle));
    
	//3.并归排序右侧数组
    $right = my_merge(array_slice($array, $middle, count($array)));
	
	//4.并归操作
    $i = 0;
    $j = 0;
    $n = 0;
    while ($i < count($left) and $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $array[$n++] = $left[$i++];
        } else {
            $array[$n++] = $right[$j++];
        }
    }

	//如果左侧有剩余，追加到$array中
    while ($i < count($left)) {
        $array[$n++] = $left[$i++];
    }

	//如果右侧有剩余，追加到$array中
    while ($j < count($right)) {
        $array[$n++] = $right[$j++];
    }

    return $array;
}

$array = array(38,27,43,3,9,82,10);

print_r(my_merge($array));
?>