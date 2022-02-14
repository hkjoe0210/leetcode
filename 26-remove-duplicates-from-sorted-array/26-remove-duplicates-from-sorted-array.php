class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $nums = array_values(array_unique($nums));
        //$nums = array_unique($ans);
    }
}