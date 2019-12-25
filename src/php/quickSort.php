<?php

/**
 * 快速排序
 *
 * @param array $arrayrray
 * @return unknown|array
 */
function quickSort($array)
{
    // 判断是否需要运行，因下面已拿出一个中间值，这里<=1
    if (count($array) <= 1) {
        return $array;
    }
    $middle = $array[0]; // 中间值
    $left = array(); // 接收小于中间值
    $right = array(); // 接收大于中间值

    // 循环比较
    for ($i = 1; $i < count($array); $i ++) {
        if ($middle < $array[$i]) {
            // 大于中间值
            $right[] = $array[$i];
        } else {
            // 小于中间值
            $left[] = $array[$i];
        }
    }
    // 递归排序划分好的2边
    $left = quickSort($left);
    $right = quickSort($right);

    // 合并排序后的数据，别忘了合并中间值
    return array_merge($left, array(
        $middle
    ), $right);
}

$arr = array(
    2,
    13,
    42,
    34,
    56,
    23,
    67,
    365,
    87665,
    54,
    68,
    3
);

print_r(quickSort($arr));