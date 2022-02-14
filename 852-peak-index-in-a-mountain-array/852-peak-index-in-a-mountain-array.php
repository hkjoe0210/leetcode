class Solution {

    /**
     * @param Integer[] $A
     * @return Integer
     */
    function peakIndexInMountainArray($A) {
        return array_search(max($A), $A);
    }
}