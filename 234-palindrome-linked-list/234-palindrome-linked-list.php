/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
        $val_list = array();
        $node = &$head;
        while(isset($node->val)){
            $val_list[] = $node->val;
            $node = &$node->next;
        }
        return $val_list == array_reverse($val_list);
    }
}