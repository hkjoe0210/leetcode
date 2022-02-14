class Solution {

    /**
     * @param String $rings
     * @return Integer
     */
    function countPoints($rings) {
        $ans = 0;
        $rod = array();
        for($i = 0; $i < strlen($rings); $i += 2){
            $rod[$rings[$i+1]][$rings[$i]] = true;
        }
        foreach($rod as $idx => $colors){
            if(count($colors) == 3) $ans++;
        }
        return $ans;
    }
}