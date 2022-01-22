/*
 * @lc app=leetcode id=35 lang=php
 *
 * [35] Search Insert Position
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $result = -1;
        foreach($nums as $key => $num) {
            if ($num === $target) {
                $result = $key;
                break;
            }
            if ($num > $target) {
                $result = $key;
                break;
            }
        }

        if ($result === -1) {
            $result = count($nums);
        }

        return $result;
    }
}
// @lc code=end

