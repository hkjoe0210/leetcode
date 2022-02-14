class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxScore($s) {
        $ans = 0;
        $right_arr = str_split($s);
        do{
            $left_arr[] = array_shift($right_arr);
            $ans = max(array_count_values($left_arr)[0] + array_count_values($right_arr)[1], $ans);
        }while(count($right_arr) > 1);
        return $ans;
    }
}