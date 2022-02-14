class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findLucky($arr) {
        $tmp = array_count_values($arr);
        $ans = -1;
        foreach($tmp as $idx => $val){
            if($idx == $val && $val > $ans){
                $ans = $val;
            }
        }
        return $ans;
    }
}