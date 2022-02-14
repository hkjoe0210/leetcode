class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $ans = array();
        for($i = 1; $i <= $n; $i++){
            if( $i % 15 == 0 ){
                $ans[] = 'FizzBuzz';
            }elseif( $i % 3 == 0){
                $ans[] = 'Fizz';
            }elseif( $i % 5 == 0){
                $ans[] = 'Buzz';
            }else{
                $ans[] = "$i";
            }
        }
        return $ans;
    }
}