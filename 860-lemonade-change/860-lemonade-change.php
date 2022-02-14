class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $money['five'] = 0;
        $money['ten'] = 0;
        
        foreach($bills as $bill){
            if($bill == 5){
                $money['five']++;
            }elseif($bill == 10){
                $money['five']--;
                $money['ten']++;
                if($money['five'] < 0 || $money['ten'] < 0){
                    return false;
                }
            }elseif($bill == 20){
                if($money['ten']){
                    $money['ten']--;
                    $money['five']--;
                }else{
                    $money['five'] -= 3;
                }
                if($money['five'] < 0 || $money['ten'] < 0){
                    return false;
                }
            }
        }
        return true;
    }
}