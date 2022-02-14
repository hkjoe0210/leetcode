class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        if($n == 0){
            return false;
        }else{
            while($n){
                if($n == 1){
                    return true;
                }
                $n = $n / 3;
            }
        }
    }
}