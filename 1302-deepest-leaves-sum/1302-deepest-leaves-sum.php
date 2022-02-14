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
     * @return Integer
     */
    function deepestLeavesSum($root) {
        $target_level = $this->getLevel($root);
        $ans = $this->getVal($root, $target_level);
        return $ans;
    }
    private function getLevel($root){
        if( !$root){
            return 0;
        }
        $l_level = 1 + $this->getLevel($root->left);
        $r_level = 1 + $this->getLevel($root->right);
        return max($l_level, $r_level);
    }
    private function getVal($root, $target_level){
        if( !$root ){
            return 0;
        }elseif($target_level === 1){
            return $root->val;
        }
        return $this->getVal($root->left, $target_level - 1) + $this->getVal($root->right, $target_level - 1);
    }
}