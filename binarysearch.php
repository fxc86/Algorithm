<?php
/**
 * ########################
 * php ʵ���۰�����㷨
 * @author http://phpff.com  2014/12/29
 */
function search($num,$array){
	$start=0;
	$end=count($array)-1;
	while($start<=$end){
		
		//�����м��λ��
		$mid=round(($start+$end)/2,0,PHP_ROUND_HALF_DOWN);

		if($num==$array[$mid]){
			return $mid;
		}elseif($num<$array[$mid]){
			$end=$mid-1;
		}else{
			$start=$mid+1;
		}
	}
	return -1;
	
}

$a=array( 0,1,2,3,4,5,6,7 );
var_dump(search(6,$a));

?>