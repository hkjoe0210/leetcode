class Solution {

    /**
     * @param String $s
     * @param Integer[] $spaces
     * @return String
     */
    function addSpaces($s, $spaces) {
        $ans = '';
        $j = 0;
        for($i = 0; $i < strlen($s) + count($spaces); $i++){
            if($i == $spaces[$j]){
                $ans .= ' ';
                $j++;
            }
            $ans .= $s[$i];
        }
        return $ans;
    }
}