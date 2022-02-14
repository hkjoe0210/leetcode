class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $count_arr = array_count_values($nums);
        return max($count_arr) > 1;
    }
}