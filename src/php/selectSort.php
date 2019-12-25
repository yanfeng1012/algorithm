<?php

/**
 * 选择排序
 * @param array $arr
 * @return array
 */
function selectSort($arr)
{
    $count = count($arr);
    if ($count < 2) {
        return $arr;
    }
    for ($i = 0; $i < $count - 1; $i ++) {
        // 当前值的位置
        $key = $i;
        for ($k = $i + 1; $k < $count; $k ++) {
            // 相邻值进行比较，条件成立替换当前值
            // 倒序 $arr[$key] < $arr[$k]
            if ($arr[$key] > $arr[$k]) {
                $key = $k;
            }
        }
        if ($key != $i) {
            // 交换位置
            $temp = $arr[$key];
            $arr[$key] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
    return $arr;
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

print_r(selectSort($arr));