class Solution {

    /**
     * @param Integer[] $plantTime
     * @param Integer[] $growTime
     * @return Integer
     */
    function earliestFullBloom($plantTime, $growTime) {
        $bloomDay = 0;
        $plantTimeTmp = 0;
        arsort($growTime);
        foreach($growTime as $idx => $time){
            $plantTimeTmp += $plantTime[$idx];
            $bloomDay = max($bloomDay, $plantTimeTmp + $time);
        }
        return $bloomDay;
    }
}