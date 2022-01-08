/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $s = trim($s);
        if (!$s) {
            return true;
        }
        if (strlen($s) === 1) {
            return false;
        }

        $stack = [];
        $chaker = array(
            "[" => "]",
            "{" => "}",
            "(" => ")"
        );

        for($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (array_key_exists($char, $chaker)) {
                $stack[] = $char;
            } else {
                $lastStack = array_pop($stack);
                if ($char !== $chaker[$lastStack]) {
                    return false;
                }
            }
        }
        return (count($stack) === 0) ? true : false;
    }
}
// @lc code=end

