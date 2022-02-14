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
    function addTwoNumbers($l1, $l2) {
        while($l1->next){
            $l1_arr[] = $l1->val;
            $l1 = $l1->next;
        }
        $l1_arr []= $l1->val;
        
        while($l2->next){
            $l2_arr[] = $l2->val;
            $l2 = $l2->next;
        }
        $l2_arr[] .= $l2->val;
        
        $add_count = (count($l1_arr) >= count($l2_arr)) ? count($l1_arr) : count($l2_arr);
        for( $i=0 ; $i<$add_count ; $i++){
            $l1_tmp = isset($l1_arr[$i]) ? $l1_arr[$i] : 0;
            $l2_tmp = isset($l2_arr[$i]) ? $l2_arr[$i] : 0;
            $sum_tmp = $l1_tmp + $l2_tmp;
            $sum_tmp = isset( $sum_arr[$i] ) ? $sum_tmp + $sum_arr[$i] : $sum_tmp;
            
            $next_index_plus = 0;
            if( $sum_tmp / 10 >= 1 ){
                $next_index_plus++;
            }
            
            if($next_index_plus){
                if( $next_index_plus){
                    $sum_arr[ $i + $next_index_plus ] = 0;
                }
                $sum_arr[ $i + $next_index_plus ] = 1;
                $sum_tmp = $sum_tmp % 10;                
            }
            
            $sum_arr[$i] = $sum_tmp ;
        }

        $i = 0;
        while( $sum_arr[$i] !== false && $i < count($sum_arr) ){
            if ($i == 0){
                $ans = new ListNode($sum_arr[$i]);
            }else{
                if(isset($list_temp)){
                    $list_temp_tmp = &$list_temp->next;
                    unset($list_temp);
                    $list_temp = &$list_temp_tmp;
                    $list_temp = new ListNode($sum_arr[$i]);
                }else{
                    $list_temp = &$ans->next;
                    $list_temp = new ListNode($sum_arr[$i]);
                }
            }
            $i++;
        }
        return $ans;
    }
}