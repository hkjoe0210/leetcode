/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $sum
     * @return Boolean
     */
    function hasPathSum($root, $sum) {
        $this->find_val = $sum;
        $this->ans = false;
        $this->sumArr = array();
        $this->getSum($root, 0, $sum);
        return $this->ans;
    }
    function getSum($node, $sum){
        if(isset($node->val) && $this->ans == false){
            if(!isset($node->left->val) && !isset($node->right->val)){
                if($sum + $node->val == $this->find_val){
                    $this->ans = true;
                }
            }else{
                $this->getSum($node->left, $sum + $node->val);
                $this->getSum($node->right, $sum + $node->val);
            }
        }
    }
}