class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {
        $start_arr = array_column($paths, 0);
        $end_arr = array_column($paths, 1);
        $ans = array_diff($end_arr, $start_arr);
        return array_pop($ans);
    }
}