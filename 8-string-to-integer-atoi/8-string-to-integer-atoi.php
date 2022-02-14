class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        $start_pos = '';
        $ans = '';
        
        for($i = 0 ;$i < strlen($str); $i++){            
            if( is_numeric( $str[$i] ) || $str[$i] == '+' || $str[$i] == '-' ){
                $start_pos = $i;
                break;
            }elseif( $str[$i] !== ' '){
                break;
            }
        }
        
        if( $start_pos !== '' ){
            for($i = $start_pos; $i < strlen($str); $i++ ){
                if( is_numeric($str[$i]) || $str[$i] == '+' || $str[$i] == '-' ){
                    $ans .= $str[$i];
                }else{
                    break;
                }
            }
        }else{
            $ans = 0;
        }
        $ans = (int)$ans;
        if( $ans < pow(-2,31) ){
            $ans = pow(-2,31);
        }
        $ans = $ans >= pow(2,31) ? pow(2,31)-1 : $ans ;
        $ans = $ans <= pow(-2,31) ? pow(-2,31) : $ans ;
        return $ans;
    }
}