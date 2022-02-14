class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    public $dict = array(1,1,2);
    function climbStairs($n) {        
        if(isset($this->dict[$n])){
            return $this->dict[$n];
        }else{
            if($n <= 0) return 1;

            $way_1 = $this->climbStairs($n - 1);
            $way_2 = $this->climbStairs($n - 2);
            $this->dict[$n - 1] = $way_1;
            $this->dict[$n - 2] = $way_2;
            return  $way_1 + $way_2;
        }
    }
}