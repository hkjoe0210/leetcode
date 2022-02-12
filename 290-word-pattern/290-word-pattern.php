class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $table = array();
        $keys = explode(" ", $s);
        for($i = 0; $i < strlen($pattern); $i++){
            $table[$pattern[$i]] = $keys[$i];
        }
        if($table != array_unique($table)) return false;
        
        $str = '';
        for($i = 0; $i < strlen($pattern); $i++){
            $str .= $str ? ' ' : '';
            $str .= $table[$pattern[$i]];
        }
        return $str == $s;
    }
}