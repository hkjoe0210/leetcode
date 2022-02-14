class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $ans[] = array_shift($nums);;
        foreach($nums as $idx => $num){
            $ans[] = $ans[$idx] + $num;
        }
        return $ans;
    }
}