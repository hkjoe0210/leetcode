class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        foreach(array_unique($numbers) as $idx => $num){
            $d = $target - $num;
            unset($numbers[$idx]);
            if(in_array($d, $numbers)){
                return array($idx+1, array_search($d, $numbers) + 1);
            }
        }
    }
}