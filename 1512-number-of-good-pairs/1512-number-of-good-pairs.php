class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $ans = 0;
        $arr = array_count_values($nums);
        foreach($arr as $count){
            if($count > 1){
                $ans += (($count-1) + 1 ) * ($count - 1) / 2;
            }
        }
        return $ans;
    }
}