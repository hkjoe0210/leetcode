class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $t_arr = str_split($t);
        $remove_count = 0;
        for($i = 0; $i <= strlen($s) - 1; $i++){
            $idx = array_search($s[$i], $t_arr);
            if($idx !== false){
                $t_arr = array_splice($t_arr, $idx - $remove + 1);
                $remove_count = $i;
            }else{
                return false;
            }
        }
        return true;
    }
}