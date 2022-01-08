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
        if (count($strs) === 1) {
            return $strs[0];
        }

        $first = str_split($strs[0]);
        $second = str_split($strs[1]);
        $result = "";

        if (count($strs) === 2) {
            if ($first === $second) {
                return $strs[0];
            }
            for ($i = 0; $i < count($first); $i++) {
                if (!($first[$i] === $second[$i])) {
                    if ($i >= 0) {
                        $result = substr($strs[0],0,$i);
                    }
                    break;
                }
                if (count($first) === $i+1) {
                    $result = substr($strs[0],0,$i+1);
                    break;
                }
            }
            return $result;
        }
            

        $third = str_split($strs[2]);

        if (count($strs) === 3) {
            if (($first === $second) && ($first === $third)) {
                return $strs[0];
            }
            for ($i = 0; $i < count($first); $i++) {
                if (!(
                    ($first[$i] === $second[$i]) &&
                    ($first[$i] === $third[$i])
                    ))
                {
                    if ($i >= 0) {
                        $result = substr($strs[0],0,$i);
                    }
                    break;
                }
            }
            return $result;
        }

        $forth = str_split($strs[3]);

        if (count($strs) === 4) {
            if (
                ($first === $second) && ($first === $third) &&
                ($first === $forth)
                ) {
                return $strs[0];
            }
            for ($i = 0; $i < count($first); $i++) {
                if (!(
                    ($first[$i] === $second[$i]) &&
                    ($first[$i] === $third[$i]) &&
                    ($first[$i] === $forth[$i])
                    ))
                {
                    if ($i >= 0) {
                        $result = substr($strs[0],0,$i);
                    }
                    break;
                }
            }
            return $result;
        }
        
    }
}
// @lc code=end

