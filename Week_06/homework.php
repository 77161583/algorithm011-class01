<!-- 32. 最长有效括号
给定一个只包含 '(' 和 ')' 的字符串，找出最长的包含有效括号的子串的长度。 -->
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $stack = new SplStack();
        $stack->push(-1);
        $max = 0;
        $len = strlen($s);
        for($i=0;$i<$len;$i++){
            if($s[$i] == '('){
                $stack->push($i);
            }else{
                $stack->pop();
                if($stack->isEmpty()){
                    $stack->push($i);
                }else{
                    $max = max($max,$i- $stack->top());
                }
            }
        }
        return $max;
    }
}