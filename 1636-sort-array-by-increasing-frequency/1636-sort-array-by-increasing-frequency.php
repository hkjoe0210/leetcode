class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function frequencySort($nums) {
        $ans = array();
        $tmp_arr = array();
        $tmp = array_count_values($nums);
                
        foreach($tmp as $idx => $count){
            $tmp_arr[$count][] = $idx;
        }
        foreach($tmp_arr as $count => $val){
            rsort($tmp_arr[$count]);
        }
        ksort($tmp_arr);
        foreach($tmp_arr as $count => $val_arr){
            foreach($val_arr as $val){
                for($i = 0; $i < $count; $i++){            
                    $ans[] = $val;
                }
            }
        }
        return $ans;
    }
}