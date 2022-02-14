class Solution {

    /**
     * @param String $word
     * @return Integer
     */
    function countVowelSubstrings($word) {
        $ans = 0;
        $vowelList = array('a'=>true,'e'=>true,'i'=>true,'o'=>true,'u'=>true);
        for($i = 0; $i < strlen($word); $i++){
            if($vowelList[$word[$i]]){
                $tmpList = array();
                $tmpList[$word[$i]] = true;
                $j = $i + 1;
                while($vowelList[$word[$j]]){
                    $tmpList[$word[$j]] = true;
                    if(count($tmpList) == 5){
                        $ans++;
                    }
                    $j++;
                }
            }
        }
        return $ans;
    }
}