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
     * @param TreeNode $t1
     * @param TreeNode $t2
     * @return TreeNode
     */
    function mergeTrees($t1, $t2) {
        if(isset($t1->val) && isset($t2->val)){
            $t3 = new TreeNode($t1->val + $t2->val);
        }elseif(isset($t1->val)){
            $t3 = new TreeNode($t1->val);
        }elseif(isset($t2->val)){
            $t3 = new TreeNode($t2->val);
        }else{
            $t3 = '';
        }
        
        if(isset($t1->left->val) || isset($t2->left->val)){
            $t3->left = $this->mergeTrees($t1->left, $t2->left);
        }
        if(isset($t1->right->val) || isset($t2->right->val)){
            $t3->right = $this->mergeTrees($t1->right, $t2->right);
        }
        return $t3;
    }
}