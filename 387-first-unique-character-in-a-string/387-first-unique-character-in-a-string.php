class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $s_arr = str_split($s);
        $s_count_arr = array_count_values($s_arr);
        $unique_char = array_search(1, $s_count_arr);
        return $unique_char ? array_search($unique_char, $s_arr) : -1;
    }
}