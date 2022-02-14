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
    public $diameter = 0;
    function diameterOfBinaryTree($root) {
        $this->getMaxDiameter($root);
        return $this->diameter;
    }
    function getMaxDiameter($node){
        if(!isset($node->val)){
            return 0;
        }
        $l_level = $this->getMaxDiameter($node->left);
        $r_level = $this->getMaxDiameter($node->right);
        
        if($this->diameter < $l_level + $r_level){
            $this->diameter = $l_level + $r_level;
        }
        return max($l_level, $r_level) + 1;
    }
}