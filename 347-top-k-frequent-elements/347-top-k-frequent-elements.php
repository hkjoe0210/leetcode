class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $ans = array();
        $counts = array_count_values($nums);
        asort($counts);
        
        for($i = 0; $i < $k; $i++){
            $key = array_keys($counts, max($counts))[0];
            $ans[] = $key;
            unset($counts[$key]);
        }
        return $ans;
    }
}