class Solution {

    /**
     * @param Integer[] $code
     * @param Integer $k
     * @return Integer[]
     */
    function decrypt($code, $k) {
        if($k > 0){
            $ans = array();
            for($i = 0; $i < count($code); $i++){
                $add = 0;
                for($j = 1; $j <= $k; $j++){
                    $add_idx = ($i+$j) % count($code);
                    $add += $code[$add_idx];
                }
                $ans[] = $add;
            }
            return $ans;
        }elseif($k < 0){            
            $ans = array();
            for($i = 0; $i < count($code); $i++){
                $add = 0;
                for($j = -1; $j >= $k; $j--){
                    $add += array_slice($code, $i+$j, 1)[0];
                }
                $ans[] = $add;
            }
            return $ans;
        }else{
            $code = array_map(function(){
                return 0;
            }, $code);
            return $code;
        }
    }
}