class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        if( strtoupper($word) == $word ){
            return true;
        }else{
            $word = substr( $word ,1);
            if( strtolower($word) == $word ){
                return true;
            }
        }
        return false;
    }
}