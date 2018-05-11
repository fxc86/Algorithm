<?php
//license under the MIT https://goo.gl/JNRTRM
function bucket_sort($my_array) {
  $n = sizeof($my_array);
  $buckets = array();
// Initialize the buckets.
  for ($i = 0; $i < $n; $i++) {
    $buckets[$i] = array();
  }
// Put each element into matched bucket.
  foreach ($my_array as $el) {
	 // var_dump($el/10);
    array_push($buckets[intval($el/10)], $el);
  }

print_r($buckets);//exit;

// Sort elements in each bucket using insertion sort. 
 $j = 0;
  for ($i = 0; $i < $n; $i++)
	  {
// sort only non-empty bucket
    if (!empty($buckets[$i])) {
      insertion_sort($buckets[$i]);
// Move sorted elements in the bucket into original array.
	  foreach ($buckets[$i] as $el) {
        $my_array[$j++] = $el;
      }
    }
  }
    return $my_array;
}
function insertion_sort(&$my_array, $fn = 'comparison_function') {
  if (!is_array($my_array) || !is_callable($fn)) return;
  for ($i = 1; $i < sizeof($my_array); $i++) {
    $key = $my_array[$i]; 
  // This will be $a in comparison function.
  // $key will be the right side element that will be
  // compared against the left sorted elements. For
  // min to max sort, $key should be higher than
  // $elements[0] to $elements[$j] 
    $j = $i - 1; // this will be in $b in comparison function
    while ( $j >= 0 && $fn($key, $my_array[$j]) ) {
      $my_array[$j + 1] = $my_array[$j];
      $j = $j - 1; // shift right
    }
    $my_array[$j + 1] = $key;
  }
}
//Following function used to compare each element.
function comparison_function($a, $b) {
  return $a < $b;
}
$test_array = array(33, 20, 25, 52, 22, 45, 15);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array :\n";
echo implode(', ',bucket_sort($test_array)). PHP_EOL;

//BucketSort($test_array);

//echo implode(', ',$test_array). PHP_EOL;


//https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-10.php


function BucketSort(&$data)
{
	$minValue = $data[0];
	$maxValue = $data[0];
	$dataLength = count($data);

	for ($i = 1; $i < $dataLength; $i++)
	{
		if ($data[$i] > $maxValue)
			$maxValue = $data[$i];
		if ($data[$i] < $minValue)
			$minValue = $data[$i];
	}

	$bucket = array();
	$bucketLength = $maxValue - $minValue + 1;
	
	for ($i = 0; $i < $bucketLength; $i++)
	{
		$bucket[$i] = array();
	}

	print_r($bucket);

	for ($i = 0; $i < $dataLength; $i++)
	{
		array_push($bucket[$data[$i] - $minValue], $data[$i]);
	}
	
	print_r($bucket);

	$k = 0;
	for ($i = 0; $i < $bucketLength; $i++)
	{
		$bucketCount = count($bucket[$i]);
		
		if ($bucketCount > 0)
		{
			for ($j = 0; $j < $bucketCount; $j++)
			{
				$data[$k] = $bucket[$i][$j];
				$k++;
			}
		}
	}

}

//https://www.programmingalgorithms.com/algorithm/bucket-sort?lang=PHP

//http://algostructure.com/sorting/bucketsort.php