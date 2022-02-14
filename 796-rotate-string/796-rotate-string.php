class Solution {

    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     */
    function rotateString($A, $B) {
        if(strlen($A) == strlen($B)){
            $A_arr = str_split($A);
            $B_arr = str_split($B);
            for($i = 0; $i < count($A_arr); $i++){
                $A_arr[] = array_shift($A_arr);
                if($A_arr == $B_arr){
                    return true;
                }
            }
        }elseif($A == $B){
            return true;
        }
        return false;
    }
}