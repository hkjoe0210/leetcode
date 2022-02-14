class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $profit = 0;
        for($i = 0; $i < count($prices)-1; $i++){
            if(isset($prices[$i+1]) && $prices[$i+1] > $prices[$i]){
                $profit += $prices[$i+1] - $prices[$i];
            }
        }
        return $profit;
    }
}