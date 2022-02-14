class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums) {
        if(count($nums) >= 2){
            $max_val = max($nums);
            
            $max_val_idx = array_search($max_val, $nums);
            unset($nums[$max_val_idx]);
            $sec_val_idx = array_search(max($nums), $nums);
            
            if($max_val >= 2 * $nums[$sec_val_idx]){
                return $max_val_idx;
            }else{
                return -1;
            }
        }elseif(count($nums) == 1){
            return 0;
        }
    }
}