class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        $ans = false;
        foreach($arr as $v){
            if(in_array($v / 2, $arr)){
                if($v == 0){
                    $tmp = array_count_values($arr);
                    if($tmp[0] == 1)
                        continue;
                }
                $ans = true;
                break;
            }
        }
        return $ans;
    }
}