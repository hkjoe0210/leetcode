class Solution {

    /**
     * @param String $secret
     * @param String $guess
     * @return String
     */
    function getHint($secret, $guess) {
        $A = 0;
        $B = 0;
        $secret = str_split($secret);
        $guess = str_split($guess);
        
        $guess_count = count($guess);
        for($i = 0; $i < $guess_count; $i++){
            if($guess[$i] == $secret[$i]){
                $A++;
                unset($secret[$i]);
                unset($guess[$i]);
            }
        }
        $guess_count = count($guess);
        $guess = array_values($guess);
        
        for($i = 0; $i < $guess_count; $i++){
            $idx = array_search($guess[$i], $secret);
            if($idx !== false){
                $B++;
                unset($secret[$idx]);
                unset($guess[$i]);
            }
        }
        return $A.'A'.$B.'B';
    }
}