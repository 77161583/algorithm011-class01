<?php

/*** 11. 盛最多水的容器
 * 给你 n 个非负整数 a1，a2，...，an，每个数代表坐标中的一个点 (i, ai) 。在坐标内画 n 条垂直线，垂直线 i 的两个端点分别为 (i, ai) 和 (i, 0)。找出其中的两条线，使得它们与 x 轴共同构成的容器可以容纳最多的水。
    说明：你不能倾斜容器，且 n 的值至少为 2。
    来源：力扣（LeetCode）
    链接：https://leetcode-cn.com/problems/container-with-most-water
 */
class Solution {
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $i = 0;
        $j = count($height)-1;
        $maxarea = 0;
        $area = 0;
        while($i < $j){
            if($height[$i] < $height[$j]){
                $area = ($j-$i) * $height[$i];
                $i++;
            }else{
                $area = ($j-$i) * $height[$j];
                $j--;
            }
            $maxarea = $area > $maxarea ? $area : $maxarea;
        }
        return $maxarea;
    }
}