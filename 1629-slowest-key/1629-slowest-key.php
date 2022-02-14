class Solution {

    /**
     * @param Integer[] $releaseTimes
     * @param String $keysPressed
     * @return String
     */
    function slowestKey($releaseTimes, $keysPressed) {
        $ans = '';
        $max = 0;
        foreach($releaseTimes as $idx => $val){            
            $duration = $val - $releaseTimes[$idx - 1];
            if($duration > $max){
                $max = $duration;
                $ans = $keysPressed[$idx];
            }elseif($duration == $max){
                if($ans < $keysPressed[$idx]){
                    $ans = $keysPressed[$idx];
                }
            }           
        }        
        return $ans;
    }
}