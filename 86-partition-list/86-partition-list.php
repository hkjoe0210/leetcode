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
     * @param Integer $x
     * @return ListNode
     */
    function partition($head, $x) {
        /*$list_less = array();
        $list_other = array();
        $node = &$head;
        while(isset($node->val)){
            if($node->val < $x){
                $list_less[] = $node->val;
            }else{
                $list_other[] = $node->val;
            }
            $node = &$node->next;
        }
        $ans_list = array_merge($list_less, $list_other);

        foreach($ans_list as $val){
            if(!isset($ans)){
                $ans = new ListNode($val);
                $ans_node = &$ans;
            }else{
                $ans_node->next = new ListNode($val);
                $ans_node = &$ans_node->next;
            }
        }
        return $ans;*/
        
        $node = &$head;
        while(isset($node->val)){
            if($node->val >= $x){
                if(!isset($tmp_list)){
                    $tmp_list = new ListNode($node->val);
                    $tmp_node = &$tmp_list;
                }else{
                    $tmp_node->next = new ListNode($node->val);
                    $tmp_node = &$tmp_node->next;
                }
                $node = $node->next;
            }else{
                $node = &$node->next;
            }
        }
        if(isset($tmp_list)){
            $node = $tmp_list;
        }
        return $head;
    }
}