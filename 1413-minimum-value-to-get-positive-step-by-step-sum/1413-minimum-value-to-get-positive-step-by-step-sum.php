class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minStartValue($nums) {
        $tmp = 0;
        $min = 0;
        foreach($nums as $num){
            $tmp+= $num;
            $min = min($tmp, $min);
            if($min > $tmp)
                $min = $tmp;
        }
        return 1 - $min;
    }
}