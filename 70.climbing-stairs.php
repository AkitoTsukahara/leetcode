/*
 * @lc app=leetcode id=70 lang=php
 *
 * [70] Climbing Stairs
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        return $this->fib($n + 1);
    }

    function fib($n) {
        if ($n <= 1) {
            return $n;
        }
        return $this->fib($n - 1) + $this->fib($n - 2);
    }
    
}
// @lc code=end

