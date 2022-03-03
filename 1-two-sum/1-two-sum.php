class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        asort($nums);
        $nums_tmp = $nums;
        $left = array_shift($nums_tmp);
        $right = array_pop($nums_tmp);
        $first = true;
        $left_shift_count = 1;
        while($nums_tmp || true){
            if($left + $right == $target){
                $left_key = array_search($left, $nums);
                print_r($nums);
                $right_key = array_search($right, array_slice($nums, $left_shift_count, null, true));
                if($left_key == $right_key){
                    $right_key++;
                }
                return array($left_key, $right_key);
            }else{
                if($left + $right > $target){
                    $right = array_pop($nums_tmp);
                }else{
                    $left = array_shift($nums_tmp);
                    $left_shift_count++;
                }
            }
            $first = false;
        }
    }
}
