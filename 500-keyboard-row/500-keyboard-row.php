class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $list = array(
            array('q','w','e','r','t','y','u','i','o','p'),
            array('a','s','d','f','g','h','j','k','l'),
            array('z','x','c','v','b','n','m')
        );
        $ans = array();
        foreach($words as $word){
            if($word){
                $word_tmp = strtolower($word);
                if(in_array($word_tmp[0], $list[0])){
                    $group = 0;
                }elseif(in_array($word_tmp[0], $list[1])){
                    $group = 1;
                }elseif(in_array($word_tmp[0], $list[2])){
                    $group = 2;
                }                
                if(isset($group)){
                    for($i = 0; $i < strlen($word_tmp); $i++){
                        if(!in_array($word_tmp[$i], $list[$group])){
                            break;
                        }
                    }
                }
                
                if($i == strlen($word_tmp)){
                    $ans[] = $word;
                }
            }
        }
        return $ans;
    }
}