class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $sum = $nums[0];
        $ans = $nums[0];
        foreach($nums as $idx => $num){
            if($idx){
                $sum = max($num, $sum + $num);
            }
            $ans = max($ans, $sum);
        }
        return $ans;
    }
}