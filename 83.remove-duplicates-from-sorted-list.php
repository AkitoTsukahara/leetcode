/*
 * @lc app=leetcode id=83 lang=php
 *
 * [83] Remove Duplicates from Sorted List
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $before_num = 0;
        return array_reduce($head,function($result_array, $current_num) {
            if ($current_num !== $before_num) {
                $result_array[] = $current_num;
            }
            $before_num = $current_num;
            return $result_array;
        },[]);
    }
}
// @lc code=end

