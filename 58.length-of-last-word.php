/*
 * @lc app=leetcode id=58 lang=php
 *
 * [58] Length of Last Word
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $array = explode(' ', $s);
        $result = 0;
        
        for ($i = count($array); $i >= 0 ; $i--) {
            if (!empty($array[$i])) {
                $result = strlen($array[$i]);
                break;
            }
        }

        if ($result === 0) {
            $result = strlen($s);
        }

        return $result;
    }
}
// @lc code=end

