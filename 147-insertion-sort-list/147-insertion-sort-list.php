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
    function insertionSortList($head) {
        $node = &$head;
        $node_arr = array();
        while(isset($node->val)){
            $node_pos[] = &$node->val;
            $node_val[] = $node->val;
            $node = &$node->next;
        }
        sort($node_val);
        foreach($node_val as $idx => $val){
            $node_pos[$idx] = $val;
        }
        return $head;
    }
}