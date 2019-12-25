<?php

/**
 * 归并排序
 *
 * @param array $arr
 * @return unknown|array
 */
function mergeSort($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }
    // 拆分数组
    $left = array_slice($arr, 0, (int) (count($arr) / 2));
    $right = array_slice($arr, (int) (count($arr) / 2));

    $left = mergeSort($left);
    $right = mergeSort($right);

    $output = merge($left, $right);

    return $output;
}

function merge($left, $right)
{
    $result = array();

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }

    array_splice($result, count($result), 0, $left);
    array_splice($result, count($result), 0, $right);

    return $result;
}

$arr = array(
    6,
    3,
    2,
    7,
    1,
    5,
    8,
    4
);

$output = mergeSort($arr);
print_r($output);