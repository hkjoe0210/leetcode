class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $counts = array_count_values($nums);
        return array_keys($counts, max($counts))[0];
    }
}