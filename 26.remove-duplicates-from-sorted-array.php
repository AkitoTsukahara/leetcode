/*
 * @lc app=leetcode id=26 lang=php
 *
 * [26] Remove Duplicates from Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $unique = array_unique($nums);
        $alignedUnique = array_values($unique);
        $duplicateCount = count($alignedUnique);
        $pushValueCount = count($nums) - duplicateCount;

        for($i=0; $i < $pushValueCount; $i++) {
            array_push($alignedUnique, 0);
        }

        $nums = $alignedUnique;
        
        return $duplicateCount;
    }
}
// @lc code=end

