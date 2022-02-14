class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        while(strlen($a) < strlen($b)){
            $a = '0'.$a;
        }
        while(strlen($a) > strlen($b)){
            $b = '0'.$b;
        }
        $ans = '';
        $carry = 0;
        for($i = strlen($a) - 1; $i >= 0; $i--){
            $tmp = $carry + $a[$i] + $b[$i];
            if($tmp == 3){
                $ans = '1'.$ans;
                $carry = 1;
            }elseif($tmp == 2){
                $ans = '0'.$ans;
                $carry = 1;
            }elseif($tmp == 1){
                $ans = '1'.$ans;
                $carry = 0;
            }else{
                $ans = '0'.$ans;
                $carry = 0;
            }
        }
        if($carry){
            $ans = '1'.$ans;
        }
        return $ans;
    }
}