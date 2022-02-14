class Solution {

    /**
     * @param String[] $logs
     * @return Integer
     */
    function minOperations($logs) {
        $ans = 0;
        foreach($logs as $val){
            if(strpos($val, '..') !== false) $ans = ($ans == 0) ? 0 : $ans - 1;
            elseif(strpos($val, '.') === false) $ans++;
        }
        return $ans;
    }
}