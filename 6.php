<?php
class Solution {
    
    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows == 1) {
            return $s;
        }
        $str = "";
        $current = 0;
        for($i=0; $i<$numRows; $i++) {
            $current = $i;         
            while($current < strlen($s) && $current >= 0) {
                $str = $str.$s[$current];
                if ($i != 0 && $i != $numRows - 1) {
                    $str = $str.$s[$current + $numRows*2 - 2 - 2*$i];
                }
                $current = $current + $numRows*2 - 2;  
            }
        }
        return $str;
    }
}
$a = new Solution();
$b = $a->convert("a",1);
var_dump($b);
/**
0     6     R
1   5 7   I I
2 4   8 H   N
3     9     G

0   4  
1 3 5 
2   6  
*/