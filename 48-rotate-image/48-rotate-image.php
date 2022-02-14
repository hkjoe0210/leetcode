class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        if(count($matrix) > 1){
            $matrix = array_map(null, ...$matrix);
            for($i = 0; $i < count($matrix); $i++){
                $matrix[$i] = array_reverse($matrix[$i]);
            }
        }else{
            return [array_reverse($matrix[0])];
        }
    }
}