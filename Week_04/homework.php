<?php
// 33. 搜索旋转排序数组
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $count = count($nums);
        $low = 0; 
        $high = $count - 1;

        while ($low <= $high){
            $mid = $low + (($high-$low)>>1);
            if($nums[$mid] ==  $target) return $mid;

            if($nums[$low] > $nums[$mid]){
                // 后半部分是有序数组
                if(($nums[$mid] < $target) && ($nums[$high] >= $target)) {
                    if($nums[$high] === $target)  return $high;
                        //在后半个区间内
                        $low = $mid + 1;
                }else {
                    $high = $mid - 1;
                }
            }else{
                // 前半部分是有序的
                if(($nums[$low] <= $target) && ($nums[$mid] > $target)) {
                    // 在有序区间内
                    if($nums[$low] === $target)  return $low;
                    $high = $mid - 1;
                }else {
                    $low = $mid + 1;
                }
            }
        }
        return -1;
    }
}


// 860. 柠檬水找零
class Solution1 {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        if(count($bills) == 0) return false;
        $five = 0; $ten = 0;
        for( $i=0; $i < count($bills); $i++){
            if($bills[$i] == 5){
                $five++;
            }elseif($bills[$i] == 10){
                if($five == 0)return false;
                $five--;
                $ten++;
            }else{
                if($ten>0 && $five>0){
                    $ten--;
                    $five--;
                }elseif($five >= 3){
                    $five -= 3;
                }else{
                    return false;
                }
            }
        }
        return true;
    }
}