class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function stringMatching($words) {
        $ans = array();
        for($i = 0; $i < count($words); $i++){
            for($j = 0; $j < count($words); $j++){                
                if($i != $j){
                    if(strpos($words[$i], $words[$j]) !== false){
                        if(!in_array($words[$j], $ans)){
                            $ans[] = $words[$j];
                        }
                    }
                }
            }
        }
        return $ans;
    }
}