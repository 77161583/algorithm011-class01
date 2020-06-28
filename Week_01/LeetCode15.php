<?php

/** 三数之和
 * 给你一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？请你找出所有满足条件且不重复的三元组。
    注意：答案中不可以包含重复的三元组。
    来源：力扣（LeetCode）
    链接：https://leetcode-cn.com/problems/3sum
 */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $arr = [];
        $len =count($nums);
        if(empty($nums) || $len < 3){
            return [];
        }
        sort($nums);
        foreach ($nums as $k => $v){
            if($v > 0){
                break;
            }
            if($k > 0 && $nums[$k-1] == $v){
                continue;
            }
            $l = $k+1;
            $r = count($nums)-1;
            while($l < $r){
                $sum = $v + $nums[$l] + $nums[$r];
                if($sum == 0){
                    $arr[] = [$v,$nums[$l],$nums[$r]];
                    // 去重操作
                    while ($l < $r && $nums[$l] === $nums[++$l]);
                    while ($l < $r && $nums[$r] === $nums[--$r]);

                }elseif($sum < 0){
                    $l++;
                }else{
                    $r--;
                }
            }
        }
        return $arr;
    }
}