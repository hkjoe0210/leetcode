class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $ans = $nums[0];
        $tmp = $nums[0];
        for( $i = 1; $i < count($nums); $i++ ){
            if($tmp < 0){
                $tmp = $nums[$i];
            }else{
                $tmp += $nums[$i];
            }
            $ans = $tmp > $ans ? $tmp : $ans;
        }
        return $ans;
    }
}