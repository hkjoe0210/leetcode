class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $nums_arr = array_count_values($nums);
        $ans = array_search(max($nums_arr), $nums_arr);
        return $ans;
    }
}