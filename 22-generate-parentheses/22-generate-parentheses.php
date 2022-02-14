class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    var $limit_count;
    var $ans;
    function generateParenthesis($n) {
        $this->limit_count = $n;
        $this->exc($n);
        return $this->ans;
    }
    function exc($n, $str = ''){
        if($n){
            if(substr_count($str, '(') < $this->limit_count){
                $this->exc($n, $str.'(');
            }
            if(substr_count($str, '(') > substr_count($str, ')')){
                $this->exc($n - 1, $str.')');
            }
        }else{
            $this->ans[] = $str;
        }
    }
}