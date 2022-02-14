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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $node_1 = &$l1;
        $node_2 = &$l2;
    
        while ( isset($node_1->val) || isset($node_2->val) ){
            if( isset($node_1->val) && isset($node_2->val)){
                if( $node_1->val <= $node_2->val ){
                    $node_val = $node_1->val;
                    $node_1 = &$node_1->next;
                }else{
                    $node_val = $node_2->val;
                    $node_2 = &$node_2->next;
                }
            }elseif( isset($node_1->val) ){
                $node_val = $node_1->val;
                $node_1 = &$node_1->next;
            }else{
                $node_val = $node_2->val;
                $node_2 = &$node_2->next;
            }
            
            if( !isset($ans) ){
                $ans = new ListNode($node_val);
                $ans_next = &$ans->next;
            }else{
                $ans_next = new ListNode($node_val);
                $ans_next = &$ans_next->next;
            }
        }        
        return $ans;
    }
}