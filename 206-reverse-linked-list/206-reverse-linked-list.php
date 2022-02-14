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
    function reverseList($head) {
        $stack = new SplStack();
        $node = &$head;
        while(isset($node->val)){
            $stack->push($node->val);
            $node = &$node->next;
        }
        if($stack->count()){
            return $this->createNode($stack);
        }
    }
    function createNode($stack){
        $new_node = new ListNode($stack->pop());
        if($stack->count()){
            $new_node->next = $this->createNode($stack);
        }
        return $new_node;
    }
}