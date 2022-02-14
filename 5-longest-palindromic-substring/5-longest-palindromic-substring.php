class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $s_tmp = '';
        $s_ans = '';
        $s_rev = strrev($s);
        
        for ($i = 0; $i < strlen($s); $i++){
            $s_tmp .= $s[$i];            
            
            if( strpos($s_rev, $s_tmp) === false ){
                $s_tmp = substr($s_tmp,1);
            }
            if( strlen($s_tmp) > strlen($s_ans) ){
                if( $s_tmp == strrev($s_tmp) ){
                    $s_ans = $s_tmp;
                }elseif( substr($s_tmp,1) == strrev( substr($s_tmp,1) ) ){
                    $s_ans = substr($s_tmp,1);
                }
            }
        }
        return $s_ans;
    }
}