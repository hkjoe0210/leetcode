class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function titleToNumber($s) {
        $table = ['','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $ans = 0;
        for($i = 0; $i < strlen($s); $i++){
            $ans += array_search($s[$i], $table) * pow(26, strlen($s) - $i -1);
        }
        return $ans;
    }
}