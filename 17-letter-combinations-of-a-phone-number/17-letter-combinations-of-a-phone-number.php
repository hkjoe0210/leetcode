class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $table = array(
            '2' => array('a','b','c'),
            '3' => array('d','e','f'),
            '4' => array('g','h','i'),
            '5' => array('j','k','l'),
            '6' => array('m','n','o'),
            '7' => array('p','q','r','s'),
            '8' => array('t','u','v'),
            '9' => array('w','x','y','z')
        );
        $ans_arr = isset($table[$digits[0]]) ? $table[$digits[0]] : array();
        for($i = 1; $i < strlen($digits); $i++){
            $ans_arr = $this->twoWordCombine($ans_arr, $table[$digits[$i]]);
        }
        return $ans_arr;
    }
    private function twoWordCombine($arr_1, $arr_2){
        for($i = 0; $i < count($arr_1); $i++){
            for($j = 0; $j < count($arr_2); $j++){
                $combine_arr[] = $arr_1[$i].$arr_2[$j];
            }
        }
        return $combine_arr;
    }
}