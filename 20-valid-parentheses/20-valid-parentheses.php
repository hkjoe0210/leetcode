class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = array();
        for( $i=0 ; $i < strlen($s) ; $i++ ){
            if( $s[$i] == '(' || $s[$i] == '{' || $s[$i] == '[' ){
                $stack[] = $s[$i];
            }else{
                switch( $s[$i] ){
                    case ')':
                        if( end($stack) == '(' ){
                            array_pop($stack);
                        }else{
                            return false;
                        }
                        break;
                    case '}':
                        if( end($stack) == '{' ){
                            array_pop($stack);
                        }else{
                            return false;
                        }
                        break;
                    case ']':
                        if( end($stack) == '[' ){
                            array_pop($stack);
                        }else{
                            return false;
                        }
                        break;
                    default :
                        if( empty($stack) ){
                            return false;
                        }
                        break;
                }
            }
        }
        if( empty($stack) ){
            return true;
        }
    }
}