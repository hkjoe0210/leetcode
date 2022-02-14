class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function longestSubstring($s, $k) {
        $counts = array_count_values(str_split($s));
        if(max($counts) < $k) return 0;
        foreach($counts as $char => $count){
            if($count < $k){
                $parts = explode($char, $s);
                $res = 0;
                foreach($parts as $part){
                    $res = max($res, $this->longestSubstring($part, $k));
                }
                return $res;
            }
        }
        return strlen($s);
    }
}