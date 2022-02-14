class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words) {
        $dict= array(
            'a' => ".-",            'b' => "-...",            'c' => "-.-.",
            'd' => "-..",            'e' => ".",            'f' => "..-.",
            'g' => "--.",            'h' => "....",            'i' => "..",
            'j' => ".---",            'k' => "-.-",            'l' =>".-..",
            'm' => "--",            'n' => "-.",            'o' => "---",
            'p' => ".--.",            'q' => "--.-",            'r' => ".-.",
            's' => "...",            't' => "-",            'u' => "..-",
            'v' => "...-",            'w' => ".--",            'x' => "-..-",
            'y' => "-.--",            'z' => "--.."
        );
        $code_arr = array();
        for($i = 0; $i < count($words); $i++){
            $code = '';
            for($j = 0; $j < strlen($words[$i]); $j++){
                $code .= $dict[$words[$i][$j]];
            }
            $code_arr[$code] = true;
        }
        return count($code_arr);
    }
}