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
    function oddEvenList($head) {
        $count = 0;
        while($head){
            if($count == 0){
                $ans = new ListNode($head->val);
                $ans_next_node = &$ans->next;
            }elseif($count == 1){
                $append = new ListNode($head->val);
                $append_next_node = &$append->next;
            }elseif($count % 2 == 0){
                $ans_next_node = new ListNode($head->val);
                $ans_next_node = &$ans_next_node->next;
            }else{
                $append_next_node = new ListNode($head->val);
                $append_next_node = &$append_next_node->next;
            }
            $head = $head->next;
            $count++;
        }
        if($append){
            $ans_next_node = $append;
        }
        return $ans;
    }
}