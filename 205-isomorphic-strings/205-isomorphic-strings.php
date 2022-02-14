class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $mapping = [];
        for($i=0; $i < strlen($s); $i++){
            if(isset($mapping[$s[$i]])){
                if ($mapping[$s[$i]] !== $t[$i]) return false;
            }else{
                if(in_array($t[$i], $mapping)) return false;
                $mapping[$s[$i]] = $t[$i];
            }
        }
        return true;
    }
}