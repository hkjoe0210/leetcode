class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        foreach($candies as $num){
            $ans[] = $num + $extraCandies >= max($candies);
        }
        return $ans;
    }
}