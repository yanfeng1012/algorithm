<?php

/**
 * 冒泡排序
 * @param array $array
 */
function bubbleSort($array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i ++) {
        for ($j = $i + 1; $j < $count; $j ++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

$arr = array(
    49,
    38,
    65,
    97,
    76,
    13,
    27,
    50
);

$output = bubbleSort($arr);
print_r($output);