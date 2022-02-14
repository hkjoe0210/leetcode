class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
       foreach($nums as $key=>$value){
            if($value === 0){
                unset($nums[$key]);
                $nums[] = 0;
            }
        }
        //$nums = array_values($nums);
    }
}