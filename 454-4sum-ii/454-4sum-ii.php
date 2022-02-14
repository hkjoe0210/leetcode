class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     * @param Integer[] $nums4
     * @return Integer
     */
    function fourSumCount($nums1, $nums2, $nums3, $nums4) {
        $ans = 0;
        $table_a = array();
        $table_b = array();
        $n = count($nums1);
        for($i = 0; $i < $n; $i++){
            for($j = 0; $j < $n; $j++){
                $table_a[$nums1[$i] + $nums2[$j]] = isset($table_a[$nums1[$i] + $nums2[$j]]) ? $table_a[$nums1[$i] + $nums2[$j]] + 1 : 1;
                $table_b[$nums3[$i] + $nums4[$j]] = isset($table_b[$nums3[$i] + $nums4[$j]]) ? $table_b[$nums3[$i] + $nums4[$j]] + 1 : 1;
            }
        }
        foreach($table_a as $v => $count){
            if(isset($table_b[0-$v])){
                $ans += $table_b[0-$v] * $count;
            }
        }
        return $ans;
    }
}