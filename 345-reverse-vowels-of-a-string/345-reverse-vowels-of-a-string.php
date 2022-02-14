class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowels_arr = array('a','e','i','o','u','A','E','I','O','U');
        $s_arr = str_split($s);
        $stack = array();
        for($i = 0; $i < count($s_arr); $i++){
            if(in_array($s_arr[$i], $vowels_arr)){
                $stack['order'][] = $i;
                $stack['val'][] = $s_arr[$i];
            }
        }
        if($stack){
            for($i = 0; $i < count($stack['order']); $i++){
                $s_arr[$stack['order'][count($stack['order']) - $i -1]] = $stack['val'][$i];
            }
        }
        return implode('', $s_arr);
    }
}