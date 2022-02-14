class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $s = trim($s);
        while(strpos($s, '  ') !== false){
            $s = str_replace('  ', ' ', $s);
        }
        $ans_arr = array_reverse(explode(' ',$s));
        $ans = implode(' ', $ans_arr);
        return $ans;
    }
}