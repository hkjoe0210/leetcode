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
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
        $this->ans = $root;
        if($this->ans->val > $val){
            if(isset($root->left->val)){
                $this->searchBST($root->left, $val);
            }
        }elseif($this->ans->val < $val){
            if(isset($root->right->val)){
                $this->searchBST($root->right, $val);
            }
        }
        if($this->ans->val == $val){
            return $this->ans;
        }
    }
}