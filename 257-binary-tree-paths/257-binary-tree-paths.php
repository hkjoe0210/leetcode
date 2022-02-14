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
     * @return String[]
     */
    function binaryTreePaths($root) {
        $this->ans = array();
        $this->getPath($root, array());
        return $this->ans;
    }
    function getPath($node, $path){
        if(isset($node->val)){
            $path[] = $node->val;
            if(!isset($node->left->val) && !isset($node->right->val)){
                $path_str = implode('->', $path);
                $this->ans[] = $path_str;
            }else{
                $this->getPath($node->left, $path);
                $this->getPath($node->right, $path);
            }
        }
    }
}