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
    function zigzagLevelOrder($root) {
        $this->ans = array();
        $this->level = 0;
        $this->getVal($root, $this->level);
        for($i = 0; $i <= $this->level; $i++){
            if($i % 2 == 1){
                $this->ans[$i] = array_reverse($this->ans[$i]);
            }
        }
        return $this->ans;
    }
    function getVal($node, $level){
        if(isset($node->val)){
            $this->level = max($this->level, $level);
            $this->ans[$level][] = $node->val;
            $this->getVal($node->left, $level+1);
            $this->getVal($node->right, $level+1);
        }
    }
}