class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $idx = count($digits) - 1;
        $digits[$idx] += 1;
        for(; $idx > 0 ; $idx--){
            if($digits[$idx] >= 10){
                $digits[$idx-1] += floor($digits[$idx] / 10);
                $digits[$idx] %= 10;
            }
        }
        while($digits[0] >= 10){
            array_unshift($digits, floor($digits[0] / 10));
            $digits[1] %= 10;
        }
        return $digits;
    }
}