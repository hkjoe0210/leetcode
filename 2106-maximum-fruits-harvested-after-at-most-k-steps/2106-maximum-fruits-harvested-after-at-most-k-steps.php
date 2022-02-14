class Solution {

    /**
     * @param Integer[][] $fruits
     * @param Integer $startPos
     * @param Integer $k
     * @return Integer
     */
    function maxTotalFruits($fruits, $startPos, $k) {
        $l = 0; $sum = 0; $max_sum = 0;
        while($l < count($fruits) && $fruits[$l][0] < $startPos - $k)
            ++$l;
        for($r = $l; $r < count($fruits) && $fruits[$r][0] <= $startPos + $k; ++$r){
            $sum += $fruits[$r][1];
            while(min($startPos -2 * $fruits[$l][0] + $fruits[$r][0], 2 * $fruits[$r][0] - $fruits[$l][0] - $startPos) > $k)
                $sum -= $fruits[$l++][1];
            $max_sum = max($max_sum, $sum);
        }
        return $max_sum;
    }
}