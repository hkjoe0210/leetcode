class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2) {
        $word1_arr = str_split($word1);
        $word2_arr = str_split($word2);                
        sort($word1_arr);
        sort($word2_arr);        
        if($word1_arr == $word2_arr){
            return true;
        }else{
            $value_counts_1 = array_count_values($word1_arr);
            $value_counts_2 = array_count_values($word2_arr);
            if(array_keys($value_counts_1) == array_keys($value_counts_2)){
                $values_array_1 = array_values($value_counts_1);
                $values_array_2 = array_values($value_counts_2);
                sort($values_array_1);
                sort($values_array_2);
                return $values_array_1 == $values_array_2;
            }else{
                return false;
            }
        }
    }
}