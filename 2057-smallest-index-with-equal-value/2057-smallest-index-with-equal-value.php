class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function smallestEqual($nums) {
        foreach($nums as $idx => $num){
            if($idx % 10 == $num){
                return $idx;
            }
        }
        return -1;
    }
}