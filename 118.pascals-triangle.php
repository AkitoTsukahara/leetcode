/*
 * @lc app=leetcode id=118 lang=php
 *
 * [118] Pascal's Triangle
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        if ($numRows === 1) {
            return [[1]];
        }
        if ($numRows === 2) {
            return [[1],[1,1]];
        }

        $result = [[1],[1,1]];
        while ($numRows > 2) {
            $count = count($result);
            foreach($result as $key => $value) {
                if ($key === 0) {
                    $result[$count][$key] = 1;
                }
                if ($key > 0) {
                    $result[$count][$key] = $result[$count-1][$key-1] + $result[$count-1][$key];
                }
            }
            $result[$count][count($result[$count])] = 1;
            $numRows--;
        }
        return $result;
    }
}
// @lc code=end

