class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $intersect_arr = array_intersect($list1, $list2);
        if(count($intersect_arr) == 1){
            return $intersect_arr;
        }else{            
            foreach($intersect_arr as $idx1 => $intersect){
                $idx2 = array_search($intersect, $list2);
                $ans_arr[$intersect] = $idx1 + $idx2;
            }
            return array_keys($ans_arr, min($ans_arr));
        }
    }
}