class Solution {

    /**
     * @param Integer[] $salary
     * @return Float
     */
    function average($salary) {
        return (array_sum($salary) - max($salary) - min($salary)) / (count($salary) - 2);
    }
}