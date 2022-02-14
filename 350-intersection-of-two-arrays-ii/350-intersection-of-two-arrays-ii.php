class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $ans = array();
        if(count($nums1) > count($nums2)){
            $more_one = &$nums1;
            $less_one = &$nums2;
        }else{
            $more_one = &$nums2;
            $less_one = &$nums1;
        }
        for($i = 0; $i < count($less_one); $i++){
            $idx = array_search($less_one[$i], $more_one);
            if($idx !== false){
                $ans[] = $more_one[$idx];
                unset($more_one[$idx]);
            }
        }
        return $ans;
    }
}