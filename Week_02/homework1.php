/****给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。

你可以假设每种输入只会对应一个答案。但是，数组中同一个元素不能使用两遍。 */

class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    $maps = [];
    foreach($nums as $k => $r){
        $val = $target - $r;
        if(isset($maps[$val])){
            return [$maps[$val],$k];
        }
        $maps[$r] = $k;
    }
    return '';
}
}



49. 字母异位词分组 
给定一个字符串数组，将字母异位词组合在一起。字母异位词指字母相同，但排列不同的字符串。
输入: ["eat", "tea", "tan", "ate", "nat", "bat"]
输出:
[
  ["ate","eat","tea"],
  ["nat","tan"],
  ["bat"]
]



class Solution {

/**
 * @param String[] $strs
 * @return String[][]
 */
function groupAnagrams($strs) {
    $res = [];
    foreach ($strs as $str) {
        $arr = str_split($str);
        sort($arr);
        $tmp_str = implode("", $arr);
        $res[$tmp_str][] = $str;
    }
    
    return array_values($res);
}
}