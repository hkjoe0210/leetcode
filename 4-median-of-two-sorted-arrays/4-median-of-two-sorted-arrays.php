class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        array_splice($nums1, 0, 0, $nums2);
        sort($nums1);
        if(count($nums1) %2){
            return $nums1[count($nums1) / 2];
        }else{
            return ($nums1[(count($nums1) / 2 ) - 0.5] + $nums1[(count($nums1) / 2 ) + 0.5]) /2;
        }
    }
}