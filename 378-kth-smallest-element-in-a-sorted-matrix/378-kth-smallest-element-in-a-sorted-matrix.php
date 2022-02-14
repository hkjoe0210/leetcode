class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($matrix, $k) {
        $arr = array();
        for($i = 0; $i < count($matrix) && $i < $k ; $i++){
            $arr = array_merge($arr, $matrix[$i]);
        }
        sort($arr);
        return $arr[$k-1];
    }
}