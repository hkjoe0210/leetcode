class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $ans = array();
        for($i = 0; $i < $n ; $i++){
            $ans[] = $nums[$i];
            $ans[] = $nums[$i+$n];
        }
        return $ans;
    }
}