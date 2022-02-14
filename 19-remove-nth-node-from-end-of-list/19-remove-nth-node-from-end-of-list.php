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
     * @param Integer $n
     * @return ListNode
     */
    public $level = 0;
    function removeNthFromEnd($head, $n) {
        $this->getLevel($head);
        return $this->removeNode($head, 1 + $this->level - $n);
    }
    public function getLevel($node){
        if(isset($node->val)){
            $this->level += 1;
            $this->getLevel($node->next);
        }
    }
    public function removeNode($node, $n){
        $node_tmp = &$node;
        for($i = 1; $i < $n; $i++){
            $node_tmp = &$node_tmp->next;
        }
        $node_tmp = $node_tmp->next;
        return $node;
    }
}