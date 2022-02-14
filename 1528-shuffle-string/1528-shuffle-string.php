class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $ans = array();
        for($i = 0; $i < strlen($s); $i++){
            $ans[$indices[$i]] = $s[$i];
        }
        ksort($ans);
        $ans = implode('', $ans);
        return $ans;
    }
}
    
    