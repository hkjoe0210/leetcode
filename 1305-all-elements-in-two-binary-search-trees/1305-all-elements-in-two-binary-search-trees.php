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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Integer[]
     */
    function getAllElements($root1, $root2) {
        $root1_arr = explode(',', $this->getAllVal($root1));
        unset($root1_arr[count($root1_arr) - 1]);
        $root2_arr = explode(',', $this->getAllVal($root2));
        unset($root2_arr[count($root2_arr) - 1]);
        $ans_arr = array_merge($root1_arr, $root2_arr);
        sort($ans_arr);
        return $ans_arr;
    }
    private function getAllVal($root){
        if(!$root){
            return null;
        }else{
            $root_str = $root->val;
            $root_str .= ',';
            $root_str .= $this->getAllVal($root->left);
            $root_str .= $this->getAllVal($root->right);
            return $root_str;
        }
    }
}