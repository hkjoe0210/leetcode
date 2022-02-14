class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        sort($nums);
        for($l = 0; $l < count($nums) - 2; $l++){
            $m = $l + 1;
            $r = count($nums) - 1;
            while($m < $r){
                $sum = $nums[$l] + $nums[$m] + $nums[$r];
                if($sum == $target){
                    return $target;
                }else{
                    $diff_tmp = abs($target - $sum);
                    if($diff_tmp == 0){
                        $ans = isset($ans) ? min($sum, $ans) : $sum;
                    }else{
                        if(isset($diff)){
                            if($diff == $diff_tmp){
                                $ans = isset($ans) ? min($sum, $ans) : $sum;
                            }elseif($diff_tmp < $diff){
                                $ans = $sum;
                            }
                            $diff = min($diff, $diff_tmp);
                        }else{
                            $ans = $sum;
                            $diff = $diff_tmp;
                        }
                    }
                    if($sum > $target){
                        $r--;
                    }else{
                        $m++;
                    }
                }
            }
        }
        return $ans;
    }
}