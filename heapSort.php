<?php

function build_heap(&$array, $i, $t) {
    $tmp_var = $array[$i];
    $j = $i * 2 + 1;
    
    while ($j <= $t) {
        /*
        echo 'i='.$i. PHP_EOL;
        echo 'j='.$j. PHP_EOL;
        echo 't='.$t. PHP_EOL;*/
        if ($j < $t){
            //var_dump($array[$j] < $array[$j + 1]);
            if ($array[$j] < $array[$j + 1]) {
                $j = $j + 1;
            }
        }
        //var_dump($tmp_var < $array[$j]);
        if ($tmp_var < $array[$j]) {
            $array[$i] = $array[$j];
            $i = $j;
            $j = 2 * $i + 1;
        } else {
            $j = $t + 1;
        }
        // echo implode(', ',$array). PHP_EOL;

    }
    $array[$i] = $tmp_var;
   
}

function heap_sort(&$array) {
    //This will heapify the array
    $init = (int) floor((count($array) - 1) / 2);
    //var_dump($init);
    // Thanks jimHuang for bug report
    for ($i = $init; $i >= 0; $i--) {
        $count = count($array) - 1;
       // echo $i.'|'.$count.PHP_EOL;
        build_heap($array, $i, $count);
       // echo implode(', ',$array). PHP_EOL;
    }
echo implode(', ',$array). PHP_EOL;

exit;
    //swaping of nodes
    for ($i = (count($array) - 1); $i >= 1; $i--) {
        $tmp_var = $array[0];
        $array [0] = $array [$i];
        $array [$i] = $tmp_var;
        
        //echo $i.PHP_EOL;

        build_heap($array, 0, $i - 1);
        //echo implode(', ',$array). PHP_EOL;

    }
}

// Demo
$array = array(9, 8, 7, 6, 5, 4, 3, 2, 1, 0, 10, 1000, 0);
heap_sort($array);
echo implode(', ',$array). PHP_EOL;
?>