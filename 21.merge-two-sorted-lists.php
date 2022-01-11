/*
 * @lc app=leetcode id=21 lang=php
 *
 * [21] Merge Two Sorted Lists
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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $array = [];

        if (count($list1) === 0 && count($list2) === 0) {
            return $array;
        }
        if (count($list1) === 0) {
            return $list2;
        }
        if (count($list2) === 0) {
            return $list1;
        }

        $closer = function($list) use(&$closer, &$array) {
            $array[] = $list->val;
            if($list->next !== NULL) {
                return $closer($list->next); 
            }
            return $array;
        };

        $closer($list1,$array);
        $closer($list2,$array);
        sort($array);

        $index = count($array) - 1;
        $list = new ListNode($array[$index], NULL);
        
        $node = function($list) use (&$node, &$array, &$index) {
            $index--;
            if ($index >= 0) {
                $listNode = new ListNode($array[$index], $list);
                return $node($listNode);
            }

            return $list;
        };

        return $node($list);
    }
}
// @lc code=end

