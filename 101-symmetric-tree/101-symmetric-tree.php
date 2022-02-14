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
     * @return Boolean
     */
    public $ans=true;
    
    function isSymmetric($root) {
        if($root->left->val !== $root->right->val){
            return false;
        }
        
        $node_left = $root->left;
        $node_right = $root->right;
        
        $this->checkNode($node_left, $node_right);
        return $this->ans;
    }
    function checkNode($l, $r){
        if($this->ans){
            if(isset($l->left->val) || isset($r->right->val)){
                if($l->left->val !== $r->right->val){
                    $this->ans = false;
                }else{
                    $this->checkNode($l->left, $r->right);
                }
            }
            if(isset($l->right->val) || isset($r->left->val)){
                if($l->right->val !== $r->left->val){
                    $this->ans = false;
                }else{
                    $this->checkNode($l->right, $r->left);
                }
            }
        }
    }
}