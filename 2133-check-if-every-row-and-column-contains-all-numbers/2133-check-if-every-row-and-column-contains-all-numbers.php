class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function checkValid($matrix) {
        $n = count($matrix);
        for($i = 1; $i <= $n; $i++){
            for($j = 0; $j < $n; $j++){
                if(!in_array($i, $matrix[$j])) return false;
            }
            for($j = 0; $j < $n; $j++){
                if(!in_array($i, array_column($matrix, $j))) return false;
            }
        }
        return true;
    }
}