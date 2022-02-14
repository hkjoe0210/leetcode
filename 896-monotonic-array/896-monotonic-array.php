class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function isMonotonic($A) {
        if(count($A) == 1 || count($A) == 0){
            return true;
        }
        $status_val = array_keys($A, max($A))[0] - array_keys($A, min($A))[0];
        if($status_val == 0){
            return true;
        }elseif($status_val > 0){
            $status = 'inc';
        }else{
            $status = 'dec';
        }
        for($i = 0; $i < count($A) - 1; $i++){
            if($A[$i] < $A[$i+1]){
                if($status != 'inc'){
                    return false;
                }
            }elseif($A[$i] > $A[$i+1]){
                if($status != 'dec'){
                    return false;
                }
            }
        }
        return true;
    }
}