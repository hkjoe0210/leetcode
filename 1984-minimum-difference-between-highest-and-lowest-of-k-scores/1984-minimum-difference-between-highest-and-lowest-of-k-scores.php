class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minimumDifference($nums, $k) {
        if($k > 1){
            $ans = 100000;
            sort($nums);
            for($i = 0; $i <= count($nums) - $k; $i++){
                $ans = min($nums[$i+$k-1] - $nums[$i], $ans);
            }
            return $ans;
        }else{
            return 0;
        }
    }
}