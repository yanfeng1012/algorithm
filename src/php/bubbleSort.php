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