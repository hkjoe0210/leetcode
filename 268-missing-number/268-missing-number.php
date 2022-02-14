class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        sort($nums);
        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] != $i){
                return $i;
            }
        }
        return $i;
    }
}