class Solution {

    /**
     * @param String $path
     * @return Boolean
     */
    function isPathCrossing($path) {
        $pos = [0,0];
        $history[] = $pos;
        for($i = 0; $i < strlen($path); $i++){
            if($path[$i] == 'E') $pos[0] += 1;
            elseif($path[$i] == 'W') $pos[0] -= 1;
            elseif($path[$i] == 'S') $pos[1] -= 1;
            elseif($path[$i] == 'N') $pos[1] += 1;
            if(!in_array($pos, $history)){
                $history[] = $pos;
            }else{
                return true;
            }
        }
        return false;
    }
}