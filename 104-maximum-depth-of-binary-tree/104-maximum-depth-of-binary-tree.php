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
    function maxDepth($root) {
        $level = isset($root->val) ? 1 : 0;
        if($level){
            $level = $this->getLevel($root,$level);
        }
        return $level;
    }
    function getLevel($node, $level){
        if(isset($node->left->val)){
            $l_level = $this->getLevel($node->left, $level + 1);
        }
        if(isset($node->right->val)){
            $r_level = $this->getLevel($node->right, $level + 1);
        }
        return max($level, $l_level, $r_level);
    }
}