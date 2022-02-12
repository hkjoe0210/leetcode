class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $ans = 0;
        $ans_str = '';
        
        for ($i = 0; $i < strlen($s); $i++)
        {
            $pos = strpos($ans_str, $s[$i]);
            if ($pos !== FALSE)
            {
                $count = strlen($ans_str);
                $ans = $count > $ans ? $count : $ans;
                $ans_str = substr($ans_str, $pos + 1).$s[$i];
            }
            else
            {
                $ans_str .= $s[$i];
                if ($i == strlen($s) - 1)
                {
                    $count = strlen($ans_str);
                    $ans = $count > $ans ? $count : $ans;
                }
            }
        }
        return $ans;
    }
}