class Solution {

    /**
     * @param Integer[] $tickets
     * @param Integer $k
     * @return Integer
     */
    function timeRequiredToBuy($tickets, $k) {
        $ans = 0;
        foreach($tickets as $idx => $value){
            if($idx <= $k){
                $ans += min($value, $tickets[$k]);
            }else{
                $ans += min($value, $tickets[$k] - 1);
            }
        }
        return $ans;
    }
}