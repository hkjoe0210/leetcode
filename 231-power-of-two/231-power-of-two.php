class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        for($i = 0; $i < 32;$i++){
            $tmp = pow(2, $i);
            if($n == $tmp){
                return true;
            }elseif($n < $tmp){
                return false;
            }
        }
        return false;
    }
}