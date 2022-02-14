class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxLengthBetweenEqualCharacters($s) {
        $arr = str_split($s);
        $count_arr = array_count_values($arr);
        $dis_arr = array(-1);
        foreach($count_arr as $key => $count){
            if($count >= 2){                
                $start_pos = strpos($s, $key);
                $end_pos = strrpos($s, $key);
                $dis_arr[] = $end_pos - $start_pos - 1;
            }
        }
        return max($dis_arr);
    }
}