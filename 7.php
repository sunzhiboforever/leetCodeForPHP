<?php
class Solution {
    
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $sign = $x > 0 ? 1 : -1;
        $x = abs($x);
        $res = 0;
        $max32 = pow(2, 31) - 1;
        while(true) {

            $num = $x % 10;
            if ($res * 10 + $num > $max32) {
                return 0;
            }
            if ($x < 10) {
                $res = $res * 10 + $x;
                break;
            }
            $res = $res * 10 + $num;
            $x = floor($x / 10);
        }
        echo $max32."----".$res.PHP_EOL;
        return $res*$sign;
    }
}
$a = new Solution();
echo $a->reverse(1534236469);
