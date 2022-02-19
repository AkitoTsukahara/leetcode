/*
 * @lc app=leetcode id=119 lang=php
 *
 * [119] Pascal's Triangle II
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        if ($rowIndex === 0) {
            return [1];
        }
        $b = $this->getRow($rowIndex-1);
        $c = array_merge(array(0),$b);
        $d = array_merge($b,array(0));
        return array_map(function($x,$y){return $x+$y;},$c,$d);
    }
}
// @lc code=end

