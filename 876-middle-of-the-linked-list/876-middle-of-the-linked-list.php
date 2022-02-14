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
    function middleNode($head) {
        $node = &$head;
        while(isset($node->val)){
            $node_arr[] = &$node;
            $val_arr[] = $node->val;
            $node = &$node->next;
        }
        $idx = ceil((count($val_arr)+1)/2)-1;
        return $node_arr[$idx];
    }
}