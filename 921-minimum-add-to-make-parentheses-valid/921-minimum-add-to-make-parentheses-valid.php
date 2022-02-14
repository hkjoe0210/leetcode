class Solution {

    /**
     * @param String $S
     * @return Integer
     */
    function minAddToMakeValid($S) {
        $left_buf = 0;
        $ans = 0;
        for($i = 0; $i < strlen($S); $i++){
            if($S[$i] == '('){
                $left_buf++;
            }elseif($S[$i] == ')'){
                if($left_buf){
                    $left_buf--;
                }else{
                    $ans++;
                }
            }
        }
        $ans += $left_buf;
        return $ans;
    }
}