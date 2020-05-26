<?php
namespace knapsack;

/**
 * 0-1 背包(动态规划)
 *
 * @todo 每一个动态规划都从一个网格开始
 *
 * @author yanfeng
 *
 */
class maxBag
{

    // 物品个数
    private $n;

    // 背包容量
    private $c;

    // 物品价值
    private $value;

    // 物品重量
    private $weight;

    public function __construct()
    {
        $this->n = 3;
        $this->c = 4;
        $this->value = [
            1500,
            3000,
            2000
        ];
        $this->weight = [
            1,
            4,
            3
        ];
    }

    /**
     * 0-1背包
     *
     * @return array|number|unknown
     */
    public function knapsack()
    {
        $maxValue = [];

        // 创建最优解的网格
        for ($i = 0; $i < $this->c; $i ++) {
            for ($j = 0; $j < $this->n; $j ++) {
                $maxValue[$i][$j] = 0;
            }
        }

        for ($i = 0; $i < $this->c; $i ++) {
            for ($j = 0; $j < $this->n; $j ++) {
                if ($i == 0) {
                    if ($j - 1 == - 1) {
                        $maxValue[$i][$j] = 0;
                    } else {
                        $maxValue[$i][$j] = ($this->weight[$i] <= $j) ? $this->value[$i] : 0;
                    }
                } else {
                    // 上一网格的值
                    $topValue = $maxValue[$i - 1][$j];

                    // 当前物品价值 加上剩余空间价值
                    $temp = ($j - $this->weight[$i] > 0) ? ($this->value[$i] + $maxValue[$i - 1][$j - $this->weight[$i]]) : $this->value[$i];

                    $thisValue = $this->weight[$i] <= $j ? $temp : $topValue;
                    $maxValue[$i][$j] = $topValue > $thisValue ? $topValue : $thisValue;
                }
            }
        }

        return $maxValue;
    }
}

$back = new maxBag();
print_r($back);
