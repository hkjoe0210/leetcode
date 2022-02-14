class Solution {

    /**
     * @param String $S
     * @return String[]
     */
    function letterCasePermutation($S) {
        $this->ans = array();
        $str = '';
        $this->perm($S, $str);
        return $this->ans;
    }
    function perm($S, $str){
        if(strlen($S) == strlen($str)){
            $this->ans[] = $str;
        }else{
            if(ctype_alpha($S[strlen($str)])){
                $str_low = $str.strtolower($S[strlen($str)]);
                $str_up = $str.strtoupper($S[strlen($str)]);
                $this->perm($S, $str_low);
                $this->perm($S, $str_up);
            }else{
                $this->perm($S, $str.$S[strlen($str)]);
            }
        }
    }
}