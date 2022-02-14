/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class BSTIterator {
    /**
     * @param TreeNode $root
     */
    function __construct($root) {
        $this->stack = array();
        $this->getNodeVal($root);
        sort($this->stack);
    }
    function getNodeVal($node){
        if(isset($node->val)){
            $this->stack[] = $node->val;
            $this->getNodeVal($node->left);
            $this->getNodeVal($node->right);
        }
    }
  
    /**
     * @return the next smallest number
     * @return Integer
     */
    function next() {
        return array_shift($this->stack);
    }
  
    /**
     * @return whether we have a next smallest number
     * @return Boolean
     */
    function hasNext() {
        return $this->stack ? true : false;
    }
}

/**
 * Your BSTIterator object will be instantiated and called as such:
 * $obj = BSTIterator($root);
 * $ret_1 = $obj->next();
 * $ret_2 = $obj->hasNext();
 */