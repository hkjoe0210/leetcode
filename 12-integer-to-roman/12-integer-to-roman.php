class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $map = array(
            'M' => 1000, 'CM' => 900,
            'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90,
            'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9,
            'V' => 5, 'IV' => 4,
            'I' => 1
        );
        $ans = '';
        while($num){
            foreach($map as $roman => $n){
                if($num >= $n){
                    $ans .= $roman;
                    $num -= $n;
                    break;
                }
            }
        }
        return $ans;
    }
}