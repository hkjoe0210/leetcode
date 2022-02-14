class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        $ans = array();
        sort($nums);
        for($a = 0; $a < count($nums) - 3; $a++){
            for($d = count($nums) - 1; $d > 2; $d--){
                $b = $a + 1;
                $c = $d - 1;
                while($b < $c){
                    $sum = $nums[$a] + $nums[$b] + $nums[$c] + $nums[$d];
                    if($sum == $target){
                        $ans[] = array($nums[$a], $nums[$b], $nums[$c], $nums[$d]);
                        $b++;
                        $c--;
                    }else{
                        if($sum < $target){
                            $b++;
                        }else{
                            $c--;
                        }
                    }
                }
            }
        }
        $ans = array_unique($ans, SORT_REGULAR);
        return $ans;
    }
}