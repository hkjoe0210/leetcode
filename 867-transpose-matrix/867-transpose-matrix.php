class Solution {

    /**
     * @param Integer[][] $A
     * @return Integer[][]
     */
    function transpose($A) {
        //return array_map(null, ...$A);
        foreach($A as $row_idx => $row){
            foreach($row as $val_idx => $val){
                $ans[$val_idx][$row_idx] = $val;
            }
        }
        return $ans;
    }
}