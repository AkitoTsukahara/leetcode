/*
 * @lc app=leetcode id=53 lang=php
 *
 * [53] Maximum Subarray
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $maxSum = 0;
        $currentSum = 0;

        if (count($nums) === 1) {
            return $nums[0];
        }

        for($i=0; $i < count($nums); $i++) {
            $currentSum = $currentSum + $nums[$i];
            
            if ($currentSum < 0) {
                $currentSum = 0; 
            }
            
            if ($maxSum < $currentSum) {
                $maxSum = $currentSum; 
            }
        }

        if ($maxSum === 0) {
            $maxSum = max($nums);
        }
        
        return $maxSum;
    }
}
// @lc code=end

