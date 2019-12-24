<?php

/**
 * 希尔排序
 *
 * @param array $arr
 * @return array
 */
function shellSort(array $arr)
{
    for ($gap = floor(count($arr) / 2); $gap > 0; $gap = floor($gap / 2)) { // 缩小增量
        for ($i = $gap; $i < count($arr); $i ++) { // 组内循环排序
            $j = $i;
            while ($j - $gap >= 0 && $arr[$j] < $arr[$j - $gap]) { // 完成组内元素一次排序
                swap($arr, $j, $j - $gap);
            }
        }
        echo implode(',', $arr) . PHP_EOL; // 完成一次增量输出一次结果
    }
    return $arr;
}

/**
 * 交换函数
 *
 * @param array $arr
 * @param int $a
 * @param int $b
 */
function swap(array &$arr, int $a, int $b)
{
    $temp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $temp;
}