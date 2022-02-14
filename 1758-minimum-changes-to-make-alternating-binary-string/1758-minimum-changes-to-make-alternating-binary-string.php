class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minOperations($s) {
        $ans = 0;
        $tmp = isset($s[0]) ? $s[0] : '';
        for($i = 1; $i < strlen($s); $i++){
            if($s[$i] == $tmp){
                $ans++;
                $tmp = !$s[$i];
            }else{
                $tmp = $s[$i];
            }
        }
        $ans = min(strlen($s) - $ans, $ans);
        return $ans;
    }
}