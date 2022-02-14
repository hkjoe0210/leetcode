class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $ans = 0;
        for($i = 0; $i < strlen($S); $i++){
            if(strpos($J, $S[$i]) !== false){
                $ans++;
            }
        }
        return $ans;
    }
}