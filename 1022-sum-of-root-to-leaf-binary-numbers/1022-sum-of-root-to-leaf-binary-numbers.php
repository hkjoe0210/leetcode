/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public $path = array();
    function sumRootToLeaf($root) {
        $ans = 0;
        $this->getPath($root);
        foreach($this->path as $bin){
            $ans += bindec($bin);
        }
        return $ans;
    }
    function getPath($node, $path_val = ''){
        if(!$node->left && !$node->right){
            $this->path[] = $path_val.$node->val;
        }else{
            if(isset($node->left->val)){
                $this->getPath($node->left, $path_val.$node->val);
            }
            if(isset($node->right->val)){
                $this->getPath($node->right, $path_val.$node->val);
            }
        }
    }
}