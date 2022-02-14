class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $ans = array();
        for($i = 0; $i < count($strs); $i++){
            $tmp = str_split($strs[$i]);
            sort($tmp);
            $idx = implode('', $tmp);
            $ans[$idx][] = $strs[$i];
        }
        return $ans;
    }
}