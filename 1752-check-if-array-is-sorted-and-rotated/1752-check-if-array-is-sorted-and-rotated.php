class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function check($nums) {
        $count = count($nums);
        for($i = 0; $i < $count && 1; $i++){
            if(end($nums) <= $nums[0]){
                $num = array_pop($nums);
                array_unshift($nums, $num);
            }else{
                break;
            }
        }
        $tmp = $nums;
        sort($tmp);
        return $nums == $tmp;
    }
}