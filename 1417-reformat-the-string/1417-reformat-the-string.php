class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reformat($s) {
        $ans = '';
        $str = array();
        $num = array();
        for($i = 0; $i < strlen($s); $i++){
            if(ctype_alpha($s[$i])){
                $str[] = $s[$i];
            }else{
                $num[] = $s[$i];
            }
        }
        $dis = abs(count($str) - count($num));
        if($dis >= 2){
            return '';
        }else{
            if(count($str) >= count($num)){
                while(count($str)){
                    $ans .= array_shift($str);
                    $ans .= array_shift($num);
                }
            }else{
                while(count($num)){
                    $ans .= array_shift($num);
                    $ans .= array_shift($str);
                }
            }
        }
        return $ans;
    }
}