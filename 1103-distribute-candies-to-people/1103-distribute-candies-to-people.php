class Solution {

    /**
     * @param Integer $candies
     * @param Integer $num_people
     * @return Integer[]
     */
    function distributeCandies($candies, $num_people) {
        $ans = array_fill(0, $num_people, 0);
        $people_idx = 0;
        $candy = 1;
        while($candies){
            if($candy >= $candies){
                $ans[$people_idx] += $candies;
                $candies = 0;
            }else{
                $ans[$people_idx] += $candy;
                $candies -= $candy;
                $candy++;
                $people_idx = ($people_idx + 1) % $num_people;
            }
        }
        return $ans;
    }
}