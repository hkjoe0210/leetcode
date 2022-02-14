class Solution {

    /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    function isPrefixOfWord($sentence, $searchWord) {
        $tmp = explode(' ', $sentence);
        $ans = -1;
        foreach($tmp as $idx => $part){
            $tmp = strpos($part, $searchWord);
            if($tmp === 0){
                return $idx+1;
            }
        }
        return $ans;
    }
}