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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        $node = &$head;
        while(isset($node->val)){
            if($node->val == $val){
                $node = $node->next;
                $node = &$node;
            }else{
                $node = &$node->next;
            }
        }
        return $head;
    }
}