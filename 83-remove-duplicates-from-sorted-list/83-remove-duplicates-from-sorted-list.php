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
    function deleteDuplicates($head) {
        $node = &$head;
        $val_arr = array();
        while(isset($node->val)){
            if(!in_array($node->val, $val_arr)){
                $val_arr[] = $node->val;
                $pre_node = &$node;
                $node = &$node->next;
            }else{
                $pre_node->next = &$node->next;
                $node = $pre_node->next;
            }
        }
        return $head;
    }
}