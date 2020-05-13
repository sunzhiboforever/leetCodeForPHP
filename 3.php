<?php
class Solution {
    
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        $cache = array();
        $max = 0;
        for($i=0; $i<$len; $i++) {
            if(!isset($cache[$s[$i]])) {
                $cache[$s[$i]] = 1;
            } else {
                foreach($cache as $k => $v) {
                    unset($cache[$k]);
                    if($k == $s[$i]) {   
                        break;
                    }                 
                }
                $cache[$s[$i]] = 1;
            }
            $max = max(count($cache), $max);
        }
        return $max;
    }
}

$a = new Solution();
echo $a->lengthOfLongestSubstring("pwwkew");