class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxDepth($s) {
        $ans = 0;
        $tmp = 0;
        for($i = 0; $i < strlen($s); $i++){
            if($s[$i] == '('){
                $tmp++;
            }elseif($s[$i] == ')'){
                $tmp--;
            }
            $ans = max($ans, $tmp);
        }
        return $ans;
    }
}