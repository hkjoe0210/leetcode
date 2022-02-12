class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    public $i = 0;
    public $prefix_length = 0;
    function longestCommonPrefix($strs) {
        if( isset( $strs[$this->i] ) && isset( $strs[$this->i + 1] ) ){
            if( $this->i == 0 ){
                $this->prefix_length = strlen( $strs[$this->i] );
            }
            for( $j=0 ; $j < $this->prefix_length ; $j++){
                if( $strs[$this->i][$j] !== $strs[$this->i + 1][$j]){
                    $this->prefix_length = $j;
                    break;
                }
            }
            
            unset($strs[$this->i]);
            $this->i++;
            $ans = $this->longestCommonPrefix($strs);
        }else{
            $ans = '';
            if($this->i == 0){
                $ans .= $strs[0];
            }else{
                for( $k=0 ; $k < $this->prefix_length ; $k++  ){
                    $ans .= $strs[$this->i][$k];
                }
            }
            return $ans;
        }
        return $ans;
    }
}