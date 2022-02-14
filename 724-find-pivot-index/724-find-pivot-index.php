class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $sum = 0;
        for($i = 0; $i < count($nums); $i++){
            $sum += $nums[$i];
        }
        
        $l_val = 0;
        for($i = 0; $i < count($nums); $i++){
            if($sum - $nums[$i] == $l_val){
                return $i;
            }
            $sum -= $nums[$i];
            $l_val += $nums[$i];
        }
        return -1;
    }
}