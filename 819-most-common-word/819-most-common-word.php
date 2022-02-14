class Solution {

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned) {
        $paragraph = str_replace(',', ' ', strtolower($paragraph));
        
        $str = '';
        for($i = 0; $i < strlen($paragraph); $i++){
            if(ctype_alpha($paragraph[$i]) || $paragraph[$i] == ' '){
                $str .= $paragraph[$i];
            }
        }
        $arr = explode(' ', $str);
        $ans_arr = array_count_values($arr);
        
        for($i = 0; $i < count($banned); $i++){
            if(isset($ans_arr[$banned[$i]])){
                unset($ans_arr[$banned[$i]]);
            }
        }
        
        $ans = array_search(max($ans_arr), $ans_arr);
        if(!$ans){
            unset($ans_arr[$ans]);
            $ans = array_search(max($ans_arr), $ans_arr);
        }
        return $ans;
    }
}