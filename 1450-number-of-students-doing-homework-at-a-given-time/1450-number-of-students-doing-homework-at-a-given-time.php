class Solution {

    /**
     * @param Integer[] $startTime
     * @param Integer[] $endTime
     * @param Integer $queryTime
     * @return Integer
     */
    function busyStudent($startTime, $endTime, $queryTime) {
        $ans = 0;
        foreach($startTime as $idx => $start){
            if($start <= $queryTime && $endTime[$idx] >= $queryTime){
                $ans++;
            }
        }
        return $ans;
    }
}