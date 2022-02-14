class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumDeletions($nums) {
        $min = min($nums);
        $max = max($nums);
        $min_idx = false;
        $max_idx = false;
        foreach($nums as $idx => $num){
            if($num == $min || $num == $max){
                $min_idx = $num == $min ? $idx : $min_idx;
                $max_idx = $num == $max ? $idx : $max_idx;
                if($min_idx !== false && $max_idx !== false){
                    list($min_idx, $max_idx) = array(min($min_idx, $max_idx), max($min_idx, $max_idx));
                    break;
                }
            }
        }
        return min($max_idx + 1, $min_idx + 1 + count($nums) - $max_idx, count($nums) - $min_idx);
    }
}