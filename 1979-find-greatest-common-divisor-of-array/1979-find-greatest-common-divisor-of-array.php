class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findGCD($nums) {
        return $this->gcd(min($nums), max($nums));
    }
    function gcd($a,$b) {
        return ($a % $b) ? $this->gcd($b,$a % $b) : $b;
    }
}