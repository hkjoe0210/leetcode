class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[][]
     */
    function minimumAbsDifference($arr) {
        $ans = array();
        sort($arr);
        for($i = 0; $i < count($arr) - 1; $i++){
            $tmp_diff = $arr[$i+1] - $arr[$i];
            $diff = !isset($diff) ? $tmp_diff : min($diff, $tmp_diff);
            if($tmp_diff == $diff){
                $ans[$tmp_diff][] = array($arr[$i], $arr[$i+1]);
            }
        }
        return $ans[$diff];
    }
}