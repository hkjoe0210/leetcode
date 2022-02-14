class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) {
        $ans = array();
        for($i = 0; $i < count($nums); $i++){
            array_splice($ans, $index[$i], 0, $nums[$i]);
        }
        return $ans;
    }
}