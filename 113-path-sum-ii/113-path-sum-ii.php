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
     * @param Integer $sum
     * @return Integer[][]
     */
    function pathSum($root, $sum) {
        $this->ans = array();
        $this->find_sum = $sum;
        $this->getPath($root, 0);
        return $this->ans;
    }
    function getPath($node, $sum, $path = array()){
        if(isset($node->val)){
            $path[] = $node->val;
            if(!isset($node->left) && !isset($node->right)){
                if($sum + $node->val == $this->find_sum){
                    $this->ans[] = $path;
                }
            }else{
                $this->getPath($node->left, $sum + $node->val, $path);
                $this->getPath($node->right, $sum + $node->val, $path);
            }
        }
    }
}