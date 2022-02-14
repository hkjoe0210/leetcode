class Solution {

    /**
     * @param String $word
     * @return Integer
     */
    function minTimeToType($word) {
        $words = array(
            'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4,
            'f' => 5, 'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9,
            'k' => 10, 'l' => 11, 'm' => 12, 'n' => 13, 'o' => 14,
            'p' => 15, 'q' => 16, 'r' => 17, 's' => 18, 't' => 19,
            'u' => 20, 'v' => 21, 'w' => 22, 'x' => 23, 'y' => 24,
            'z' => 25
        );
        $ans = strlen($word);
        $pos = 0;
        for($i = 0; $i < strlen($word); $i++){
            $ans +=  abs($words[$word[$i]] - $pos) > 13 ? 26 - max($words[$word[$i]],$pos) + min($words[$word[$i]], $pos) : abs($words[$word[$i]] - $pos);
            $pos = $words[$word[$i]];
        }
        return $ans;
    }
}