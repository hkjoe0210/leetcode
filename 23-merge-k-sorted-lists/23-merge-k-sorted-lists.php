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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $ans = null;
        for($l=0; $l < sizeof($lists);$l++) {
            $ans = $this->mergeTwoLists($ans, $lists[$l]);
        }
        return $ans;
    }
    function mergeTwoLists($l1, $l2) {
        if($l1 === NULL) return $l2;
        if($l2 === NULL) return $l1;
        if($l1->val < $l2->val){
            $l1->next = $this->mergeTwoLists($l1->next, $l2);
            return $l1;
        }else{
            $l2->next = $this->mergeTwoLists($l2->next, $l1);
           return $l2;
        }
    }
}