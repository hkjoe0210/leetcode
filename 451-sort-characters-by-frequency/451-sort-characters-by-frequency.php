class Solution {

    /**
     * @param String $s
     * @return String
     */
    function frequencySort($s) {
        $ans = '';
        $s_arr = str_split($s);
        $s_count = array_count_values($s_arr);
        if($s_count){
            arsort($s_count);
            foreach($s_count as $char => $count){
                for($i = 0; $i < $count; $i++){
                    $ans .= $char;
                }
            }
        }
        return $ans;
    }
}