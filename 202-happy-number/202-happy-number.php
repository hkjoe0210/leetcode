class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $log = array();
        while($n != 1){
            if(!in_array($n, $log)){
                $log[] = $n;
                $n_tmp = 0;
                while($n >= 1){
                    $n_tmp += ($n % 10) * ($n % 10);
                    $n = $n / 10;
                }
                $n = $n_tmp;
            }else{
                return false;
            }
        }
        return true;
    }
}