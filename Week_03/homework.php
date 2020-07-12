 <?php

//  leetcode50:Pow(x,n)

class Solution {
    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        if($n == 0){
           return 1;
        }
        return $n > 0 ? $this->fenzhi($x,$n):1.0/$this->fenzhi($x,-$n);
    }

    function fenzhi($x,$n){
        
       if($n == 0) return 1;
       if($n == 1) return $x;

       $sub = $this->fenzhi($x, intval($n/2));

       return $n % 2? $sub*$sub*$x:$sub*$sub;

    }
}


//leetcode 70 爬楼梯

class Solution1 {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        return $this->fib($n,1,1);
    }

    function fib($n,$a,$b){
        if($n<=1){
            return $b;
        }
        return $this->fib($n-1,$b,$a+$b);
    }
}