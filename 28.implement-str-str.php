/*
 * @lc app=leetcode id=28 lang=php
 *
 * [28] Implement strStr()
 */

// @lc code=start
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $result = strpos($haystack, $needle);
        if ($result || $result === 0) {
            return $result;
        } elseif (
            ($haystack === "" && $needle === "") ||
            ($haystack !== "" && $needle === "")
            ) {
            return (int)0;
        } else {
            return (int)-1;
        }
    }
}
// @lc code=end

