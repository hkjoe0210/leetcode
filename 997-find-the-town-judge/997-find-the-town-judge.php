class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $trust
     * @return Integer
     */
    function findJudge($n, $trust) {
        if($n == 1) return 1;
        $ans = -1;
        $trusted_count = array_count_values(array_column($trust, 1));
        if($trusted_count && max($trusted_count) == $n - 1){
            $tmp = array_keys($trusted_count, $n - 1);
            if(!array_intersect($tmp, array_column($trust, 0))){
                $ans = $tmp[0];
            }
        }
        return $ans;
    }
}