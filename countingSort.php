<?php
//计数排序
$ar = array(7, 2, 0, 3, 8, 0, 12, 7, 6, 7,100);
$count = array();
foreach ($ar as $v) {
    $count[$v] = isset($count[$v]) ? $count[$v] + 1 : 1;
}
print_r($count);

$sorted = array();
$min = min($ar);
$max = max($ar);
for ($i=$min; $i<=$max; $i++) {
	var_dump($i);
    if (isset($count[$i])) {
        for ($j=0; $j<$count[$i]; $j++) {
            $sorted[] = $i;
        }
    }
}

echo implode(', ',$ar). PHP_EOL;


echo implode(', ',$sorted). PHP_EOL;

//http://www.growingwiththeweb.com/2014/05/counting-sort.html
//https://stackoverflow.com/questions/8681461/counting-sort-in-php

