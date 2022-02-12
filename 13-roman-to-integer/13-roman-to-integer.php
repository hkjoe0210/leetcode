class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $map = array(
            'M' => 1000, 'CM' => 900,
            'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90,
            'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9,
            'V' => 5, 'IV' => 4,
            'I' => 1
        );
        $ans = 0;
        for($i = 0; $i < strlen($s); $i++){
            if($map[$s[$i].$s[$i+1]]){
                $ans += $map[$s[$i].$s[$i+1]];
                $i++;
            }else{
                $ans += $map[$s[$i]];
            }
        }
        return $ans;
    }
}