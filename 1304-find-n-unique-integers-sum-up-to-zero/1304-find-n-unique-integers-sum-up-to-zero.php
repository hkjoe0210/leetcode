class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function sumZero($n) {
        if($n%2){
            $ans[] = 0;
            for($i = 1; $i <= ($n-1)/2; $i++){
                $ans[] = 0 - $i;
                $ans[] = $i;
            }
        }else{
            for($i = 1; $i <= $n / 2; $i++){
                $ans[] = 0 - $i;
                $ans[] = $i;
            }
        }
        return $ans;
    }
}