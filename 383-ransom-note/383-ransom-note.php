class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $arr = str_split($magazine);
        for($i = 0; $i < strlen($ransomNote); $i++){
            if(in_array($ransomNote[$i], $arr)){
                $pos = array_search($ransomNote[$i], $arr);
                unset($arr[$pos]);
            }else{
                return false;
            }
        }
        return true;
    }
}