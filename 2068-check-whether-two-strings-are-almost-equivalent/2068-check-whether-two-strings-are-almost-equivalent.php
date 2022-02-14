class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function checkAlmostEquivalent($word1, $word2) {
        $word_counts_1 = array_count_values(str_split($word1));
        $word_counts_2 = array_count_values(str_split($word2));

        foreach($word_counts_1 as $key => $count){
            if(abs($count - $word_counts_2[$key]) > 3){
                return false;
            }else{
                unset($word_count_2[$key]);
            }
        }
        foreach($word_counts_2 as $key => $count){
            if(abs($count - $word_counts_1[$key]) > 3){
                return false;
            }
        }
        return true;
    }
}