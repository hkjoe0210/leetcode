class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function threeConsecutiveOdds($arr) {
        for($i = 0; $i < count($arr) - 2; $i++){
            if($arr[$i] % 2 && $arr[$i + 1] % 2 && $arr[$i + 2] % 2){
                return true;
            }
        }
        return false;
    }
}