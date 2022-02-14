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
     * @return ListNode
     */
    function swapPairs($head) {
        $node = &$head;
        while(isset($node->val) && isset($node->next->val)){
            $tmp = $node->val;
            $node->val = $node->next->val;
            $node->next->val = $tmp;
            $node = &$node->next->next;
        }
        return $head;
    }
}