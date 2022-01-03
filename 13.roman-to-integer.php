/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sArray = str_split($s);
        $symbolArray = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000,
        ];

        $result = $symbolArray[$sArray[count($sArray)-1]];
        for ($i = count($sArray)-2; $i >= 0; $i--) {
            if ($symbolArray[$sArray[$i]] < $symbolArray[$sArray[$i+1]]) {
                $result -= $symbolArray[$sArray[$i]];
            } else {
                $result += $symbolArray[$sArray[$i]];
            }
        }
        return $result;
    }
}
// @lc code=end

