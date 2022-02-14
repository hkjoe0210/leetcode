class Solution {

    /**
     * @param Integer $N
     * @return Integer
     */
    function fib($N) {
        if($N == 0){
            return 0;
        }elseif($N == 1){
            return 1;
        }
        return $this->fib($N - 1) + $this->fib($N - 2);
    }
}