class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPowerOfFour($num) {
        if($num > 0){
            $num_convert = base_convert($num, 10, 2);
            $counts = array_count_values(str_split($num_convert));
            if(isset($counts[1]) && $counts[1] == 1 && $counts[0] % 2 == 0){
                return true;
            }
        }
        return false;
    }
}