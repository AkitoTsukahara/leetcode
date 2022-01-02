/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $strArray = str_split($x);
        $reverseArray = array_reverse($strArray);
        $palindromeInt = intval(implode($reverseArray));

        if ($x === $palindromeInt) {
            return true;
        } else {
            return false;
        }
    }
}
// @lc code=end

