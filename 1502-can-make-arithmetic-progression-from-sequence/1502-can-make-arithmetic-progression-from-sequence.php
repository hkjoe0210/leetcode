class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function canMakeArithmeticProgression($arr) {
        sort($arr);
        $start = array_shift($arr);
        $sec = array_shift($arr);
        $dis = $sec - $start;
        foreach($arr as $idx => $val){
            if($val - ($idx + 1) * $dis !== $sec){
                return false;
            }
        }
        return true;
    }
}