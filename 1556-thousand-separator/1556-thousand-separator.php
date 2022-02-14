class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function thousandSeparator($n) {
        $ans = '';
        $n = str_split($n);
        for($i = count($n); $i >= 0; $i--){
            $ans = $n[$i].$ans;
            if($i != 0 && $i != count($n) && (count($n) - $i) % 3 == 0){
                $ans = '.'.$ans;
            }
        }
        return $ans;
    }
}