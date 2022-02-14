class Solution {

    /**
     * @param String[] $nums
     * @return String
     */
    function findDifferentBinaryString($nums) {
        $nums_dec = array();
        foreach($nums as $num){
            $nums_dec[] = bindec($num);
        }
        $ans_dec = 0;
        while(in_array($ans_dec, $nums_dec)){
            $ans_dec++;
        }
        $ans_bin = decbin($ans_dec);
        while(strlen($ans_bin) < count($nums)){
            $ans_bin = '0'.$ans_bin;
        }
        return $ans_bin;
    }
}