class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $ans = array();
        sort($nums);
        for($i = 0; $i < count($nums); $i++){
            $inc = 0;
            while($nums[$i] + $inc  < $nums[$i + 1] - 1){
                $ans[] = $nums[$i] + $inc + 1;
                $inc++;
            }
        }
        
        $dec_lost_count = min($nums);
        for($i = 1; $i < $dec_lost_count; $i++){
            $ans[] = min($nums) - $i;
        }
        
        $inc_lost_count = count($nums) - max($nums);
        for($i = 1; $i <= $inc_lost_count; $i++){
            $ans[] = max($nums) + $i;
        }
        return $ans;
    }
}