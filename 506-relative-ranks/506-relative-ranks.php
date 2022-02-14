class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function findRelativeRanks($nums) {
        $nums_tmp = $nums;
        for($i = 1; $i <= count($nums); $i++){
            $idx = array_keys($nums_tmp, max($nums_tmp))[0];

            unset($nums_tmp[$idx]);
            if($i == 1) {
                $nums[$idx] = "Gold Medal";
            }elseif($i == 2){
                $nums[$idx] = "Silver Medal";  
            }elseif($i == 3){
                $nums[$idx] = "Bronze Medal";
            }else{
                $nums[$idx] = "$i";
            }
            
        }
        return $nums;
    }
}