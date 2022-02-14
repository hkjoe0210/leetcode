class Solution {

    /**
     * @param String $text
     * @return String
     */
    function arrangeWords($text) {
        $text = strtolower($text);
        $arr = explode(' ',$text);
        $tmp = array();
        $ans = array();
        foreach($arr as $part){
            $tmp[strlen($part)][] = $part;
        }
        ksort($tmp);
        foreach($tmp as $tmp_detail){
            foreach($tmp_detail as $part){
                $ans[] = $part;
            }
        }
        $ans = ucfirst(implode(' ', $ans));
        return $ans;
    }
}