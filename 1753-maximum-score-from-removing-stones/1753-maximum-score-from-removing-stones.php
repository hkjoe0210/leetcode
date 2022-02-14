class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer
     */
    function maximumScore($a, $b, $c) {
        $tmp = array($a, $b, $c);
        rsort($tmp);
        list($a, $b, $c) = $tmp;
        
        $ans = 0;
        while($a && $b || $b && $c || $a && $c){
            if($a == max($a, $b, $c)){
                if($b == max($b, $c)){
                    $a--;
                    $b--;
                }else{
                    $a--;
                    $c--;
                }
            }else{
                if($a == max($a, $c)){
                    $b--;
                    $a--;
                }else{
                    $b--;
                    $c--;
                }
            }
            $ans++;
        }
        return $ans;
    }
}