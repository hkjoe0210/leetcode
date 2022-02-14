class MyQueue {
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->stack = array();
    }
  
    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack[] = $x;
    }
  
    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {
        return array_shift($this->stack);
    }
  
    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        return reset($this->stack);
    }
  
    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        return !$this->stack;
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */