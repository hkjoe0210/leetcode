class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        while($num >= 10){
            $tmp = 0;
            while($num >= 1){
                $tmp += $num % 10;
                $num = $num / 10;
            }
            $num = $tmp;
        }
        return $num;
    }
}