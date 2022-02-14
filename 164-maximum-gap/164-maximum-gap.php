class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumGap($nums) {
        $ans = 0;
        sort($nums);
        for($i = 0; $i < count($nums); $i++){
            $ans = max($ans, $nums[$i+1] - $nums[$i]);
        }
        return $ans;
    }
}