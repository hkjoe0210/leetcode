class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxPower($s) {
        $ans = array();
        $tmp_val = 0;
        for($i = 0;$i < strlen($s); $i++){
            if($tmp == $s[$i]){
                $tmp_val++;
                $ans[] = $tmp_val;
            }else{
                $tmp = $s[$i];
                $tmp_val = 1;
            }            
        }
        return $ans ? max($ans) : 1;
    }
}