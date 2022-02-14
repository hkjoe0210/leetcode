class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        return min(array_diff(range(1, count($nums) + 1), $nums));
    }
}