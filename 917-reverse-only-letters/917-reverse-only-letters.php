class Solution {

    /**
     * @param String $S
     * @return String
     */
    function reverseOnlyLetters($S) {
        $ans = array();
        $s_pure = '';
        for($i = 0; $i <strlen($S); $i++){
            if(ctype_alpha($S[$i])){
                $s_pure .= $S[$i];
            }else{
                $ans[$i] = $S[$i];
            }
        }
        $s_rev = strrev($s_pure);
        
        $ans_idx = 0;
        for($i = 0; $i < strlen($s_rev); $i++){
            while(isset($ans[$ans_idx])){
                $ans_idx++;
            }
            $ans[$ans_idx] = $s_rev[$i];
        }
        ksort($ans);
        return implode('', $ans);
    }
}