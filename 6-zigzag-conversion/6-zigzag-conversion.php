class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $cycle_cost = $numRows + $numRows -2;
        $ans = '';
        if($cycle_cost == 0){
            $ans = $s;
        }else{
            for($i = 0; $i < strlen($s); $i++){
                $belong_pos = $i % $cycle_cost;

                if( $belong_pos > $numRows-1 ){
                    $belong_row = $cycle_cost - $belong_pos;
                }else{
                    $belong_row = $belong_pos;
                }             
                $row_datas[$belong_row][] = $s[$i];
            }
            if(isset($row_datas)){
                foreach($row_datas as $row_data){
                    $ans .= implode('',$row_data);
                }
            }
        }
        
        return $ans;
    }
}