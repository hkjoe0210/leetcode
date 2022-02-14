class Solution {

    /**
     * @param String[] $nums
     * @param Integer $k
     * @return String
     */
    function kthLargestNumber($nums, $k) {
        sort($nums);
        while($k){
            $ans = array_pop($nums);
            $k--;
        }
        return $ans;
    }
}