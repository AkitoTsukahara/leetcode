/*
 * @lc app=leetcode id=88 lang=php
 *
 * [88] Merge Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $nums1 = $this->sliceArray($nums1, $m);
        $nums2 = $this->sliceArray($nums2, $n);
        
        $nums1 = array_merge($nums1, $nums2);
        asort($nums1);
    }

    function sliceArray($array, $max) {
        if (is_null($array)) {
            return $array;
        }

        $result = [];

        foreach($array as $key => $value) {
            if ($max > $key) {
                $result[] = $value;
            }
        }

        return $result;
    }
}
// @lc code=end

