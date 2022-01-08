/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $result = '';
        if (count($strs) === 0) {
            return $result;
        }

        for ($i = 0; $i < count(str_split($strs[0])); $i++) {
            $char = substr($strs[0],$i,1);
            var_dump($char);
            for ($j = 0;$j < count($strs); $j++) {
                if ($strs[$j][$i] !== $char) {
                    return $result;
                }
            }
            $result = $result . $char;
        }
        return $result;
    }
}
// @lc code=end

