class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $is_negative = strpos( $x , '-' ) !== false;
        
        $ans = str_replace('-', '', strrev($x) );
        $ans = $is_negative ? '-'.$ans : $ans;
        
        if( (int)$ans > pow(2,31) -1 || (int)$ans < pow(-2,31) ){
            return 0;
        }else{
            return (int)$ans;
        }
    }
}