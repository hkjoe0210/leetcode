class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        return $nums = array_merge(array_splice($nums,($cnt=count($nums))-($k %$cnt)),$nums);
    }
}