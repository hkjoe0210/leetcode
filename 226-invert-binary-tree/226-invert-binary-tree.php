/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution
{
    /**
     * @param TreeNode $root
     *
     * @return TreeNode
     */
    public function invertTree(?TreeNode $root)
    {
        $result = new TreeNode($root->val);
        if (null !== $root) {
            $result->left = $this->invertTree($root->right);
            $result->right = $this->invertTree($root->left);

            return $result;
        }
    }
}