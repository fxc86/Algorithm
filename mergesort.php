<?php
/**
 * ########################
 * php ʵ�ֲ��������㷨
 * @author http://phpff.com  2014/12/29
 */
function my_merge($array) {
    //���ֻ��һ��Ԫ�ز���Ҫ����ֱ�ӷ���
    if (count($array) <= 1) {
        return $array;
    }
    //1.���������м�ֵ,ע�����������Ǵ�0��ʼ�����м�����ķ���
    $middle = round(count($array) / 2, 0, PHP_ROUND_HALF_DOWN);
        
	//2.���������������
    $left = my_merge(array_slice($array, 0, $middle));
    
	//3.���������Ҳ�����
    $right = my_merge(array_slice($array, $middle, count($array)));
	
	//4.�������
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

	//��������ʣ�࣬׷�ӵ�$array��
    while ($i < count($left)) {
        $array[$n++] = $left[$i++];
    }

	//����Ҳ���ʣ�࣬׷�ӵ�$array��
    while ($j < count($right)) {
        $array[$n++] = $right[$j++];
    }

    return $array;
}

$array = array(38,27,43,3,9,82,10);

print_r(my_merge($array));
?>