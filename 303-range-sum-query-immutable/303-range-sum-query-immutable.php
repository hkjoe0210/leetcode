class NumArray {
    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->nums = $nums;
    }
  
    /**
     * @param Integer $i
     * @param Integer $j
     * @return Integer
     */
    function sumRange($i, $j) {
        $sum = 0;
        while($i <= $j){
            $sum += $this->nums[$i];
            $i++;
        }
        return $sum;
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($i, $j);
 */