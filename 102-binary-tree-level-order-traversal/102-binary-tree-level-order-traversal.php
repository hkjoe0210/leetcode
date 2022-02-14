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
     * @return Integer[][]
     */
    function levelOrder($root) {
        $this->ans = array();
        $this->getVal($root, 0);
        return $this->ans;
    }
    function getVal($node, $level){
        if(isset($node->val)){
            $this->ans[$level][] = $node->val;
            $this->getVal($node->left, $level+1);
            $this->getVal($node->right, $level+1);
        }
    }
}