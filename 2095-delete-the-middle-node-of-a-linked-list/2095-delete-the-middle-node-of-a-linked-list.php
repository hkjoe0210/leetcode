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
    function deleteMiddle($head) {
        $mid_idx = $this->getMiddleIdx($head);
        $idx = 0;
        while($head){
            if($idx != $mid_idx){
                if($idx == 0){
                    $ans = new ListNode($head->val);
                    $ans_node = &$ans;
                }else{
                    $ans_node->next = new ListNode($head->val);
                    $ans_node = &$ans_node->next;
                }
            }
            $idx++;
            $head = $head->next;
        }
        return $ans;
    }
    function getMiddleIdx($head){
        $count = 1;
        $node = &$head;
        while($node = &$node->next){
            $count++;
        }
        $mid_idx = floor($count/2);
        return $mid_idx;
    }
}