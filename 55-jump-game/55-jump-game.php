class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {        
        $max = 0;
        for($i = 0; $i < count($nums); $i++){
            if($i > $max){
                return false;
            }else{
                if($max < $nums[$i] + $i){
                    $max = $nums[$i] + $i;
                }
            }
        }
        return true;
        
    }
}