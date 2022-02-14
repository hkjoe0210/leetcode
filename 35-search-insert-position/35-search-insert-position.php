class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        foreach($nums as $idx => $num){
            if($num == $target){
                return $idx;
            }elseif($num > $target){
                return $idx;
            }
        }
        return $idx+1;
    }
}