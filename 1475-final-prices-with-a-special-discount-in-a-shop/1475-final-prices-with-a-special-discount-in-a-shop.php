class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer[]
     */
    function finalPrices($prices) {
        for($i = 0; $i < count($prices); $i++){
            for($j = $i+1; $j <= count($prices); $j++){
                $ans[$i] = $prices[$i];
                if($prices[$i] >= $prices[$j]){
                    $ans[$i] = $prices[$i] - $prices[$j];
                    break;
                }
            }
        }
        return $ans;
    }
}