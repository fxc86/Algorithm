<?php
function shellSort(&$arr)
{
	if(!is_array($arr)){
		return;
	}
	$n = count($arr);
	for($gap = floor($n/2);$gap > 0;$gap = floor($gap/=2))
	{
		var_dump($gap);
		for($i = $gap;$i < $n;++$i)
		{
			for($j = $i - $gap;$j >= 0&&$arr[$j + $gap] < $arr[$j];$j -= $gap)
			{
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+$gap];
				$arr[$j + $gap] = $temp;
				echo implode(', ',$arr). PHP_EOL;
			}
		}
	}
}

$test_array = array(20, 40, 60, 80, 30, 70, 90, 10, 50, 0);
shellSort($test_array);
echo implode(', ',$test_array). PHP_EOL;

//https://www.cnblogs.com/chengxiao/p/6104371.html
//http://www.stoimen.com/blog/2012/02/27/computer-algorithms-shell-sort/
