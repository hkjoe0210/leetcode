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
     * @param Integer $k
     * @return Boolean
     */
    public $val_arr;
    function findTarget($root, $k) {
        $this->getAllVal($root);
        $count = count($this->val_arr);
        for($i = 0; $i < $count; $i++){
            $find_val = $k - $this->val_arr[$i];
            unset($this->val_arr[$i]);
            if(in_array($find_val, $this->val_arr)){
                return true;
            }
        }
    }
    function getAllVal($node){
        if(isset($node->val)){
            $this->val_arr[] = $node->val;
            $this->getAllVal($node->left);
            $this->getAllVal($node->right);
        }
    }
}