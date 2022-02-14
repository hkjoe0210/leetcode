class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $max = 0;
        $sec = 0;
        for($i = 0; $i < count($nums); $i++){
            if($max <= $nums[$i]){
                $sec = $max;
                $max = $nums[$i];
            }elseif($sec < $nums[$i]){
                $sec = $nums[$i];
            }
        }
        return ($max - 1) * ($sec - 1);
    }
}