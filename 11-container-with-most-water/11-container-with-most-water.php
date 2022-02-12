class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $area = 0;
        $start = 0;
        $end = count($height) - 1;
        for($i = 0; $i < count($height); $i++){
            $area_l = $height[$start] > $height[$end] ? $height[$end] : $height[$start];
            $area_w = $end - $start;
            $area = max($area, $area_l * $area_w);
            
            if( $height[$start] <= $height[$end] ){
                $start++;
            }else{
                $end--;
            }
        }
        
        return $area;
    }
}