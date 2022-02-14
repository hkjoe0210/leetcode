class Solution {
    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->default = $nums;
        $this->stack = $nums;
    }
  
    /**
     * Resets the array to its original configuration and return it.
     * @return Integer[]
     */
    function reset() {
        $this->stack = $this->default;
        return $this->stack;
    }
  
    /**
     * Returns a random shuffling of the array.
     * @return Integer[]
     */
    function shuffle() {
        shuffle($this->stack);
        return $this->stack;
    }
}

/**
 * Your Solution object will be instantiated and called as such:
 * $obj = Solution($nums);
 * $ret_1 = $obj->reset();
 * $ret_2 = $obj->shuffle();
 */