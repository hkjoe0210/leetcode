class MinStack {
    /**
     * initialize your data structure here.
     */
    function __construct() {
        $this->stack = array();
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack[] = $x;
    }
  
    /**
     * @return NULL
     */
    function pop() {
        array_pop($this->stack);
    }
  
    /**
     * @return Integer
     */
    function top() {
        return end($this->stack);
    }
  
    /**
     * @return Integer
     */
    function getMin() {
        return min($this->stack);
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */