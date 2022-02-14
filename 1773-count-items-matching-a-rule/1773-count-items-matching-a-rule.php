class Solution {

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        $keys = array('type', 'color', 'name');
        $ans = 0;
        foreach($items as $item){
            list($type, $color, $name) = $item;
            if($$ruleKey == $ruleValue){
                $ans++;
            }
        }
        return $ans;
    }
}