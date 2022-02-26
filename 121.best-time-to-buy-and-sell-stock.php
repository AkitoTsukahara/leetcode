/*
 * @lc app=leetcode id=121 lang=php
 *
 * [121] Best Time to Buy and Sell Stock
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $count = count($prices);
        if ($count < 2) {
            return 0;
        }

        /**
        max = 0;
        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                $max = max($max, $prices[$j] - $prices[$i]);
            }
        }
        */

        $max = 0;
        $minVal = $prices[0];
        for ($i = 1; $i < $count; $i++) {
            $max = max($max, $prices[$i] - $minVal);
            $minVal = min($minVal, $prices[$i]);
        }

        return $max;
    }
}
// @lc code=end

