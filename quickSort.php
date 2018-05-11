<?php
function quickSort(&$arr){
    if(count($arr)>1){
        $k=$arr[0];
        $x=array();
        $y=array();
        $_size=count($arr);
        for($i=1;$i<$_size;$i++){
            if($arr[$i]<=$k){
                $x[]=$arr[$i];
            }else{
                $y[]=$arr[$i];
            }
        }
		echo implode(', ',$x). PHP_EOL;
		echo implode(', ',$y). PHP_EOL;
        $x=quickSort($x);
        $y=quickSort($y);
		return array_merge($x,array($k),$y);
    }else{
        return $arr;
    }
}

$test_array = array(49, 40, 60, 80, 30, 70, 90, 10, 50, 0);
echo implode(', ',quickSort($test_array)). PHP_EOL;

//https://codereview.stackexchange.com/questions/82834/quick-sort-in-php
//https://pageconfig.com/post/implementing-quicksort-in-php