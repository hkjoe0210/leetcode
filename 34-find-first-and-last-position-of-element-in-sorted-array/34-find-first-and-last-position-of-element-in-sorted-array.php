class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        if( in_array($target, $nums) ){
            $start =  array_search($target, array_unique($nums));
            $end = array_search($target, array_unique(array_reverse($nums, true)));
            return [$start, $end];
        }else{
            return [-1,-1];
        }
        //return in_array($target, $nums) != false ? [array_search($target, array_unique($nums)), array_search($target, array_unique(array_reverse($nums, true)))] : [-1,-1];
    }
}