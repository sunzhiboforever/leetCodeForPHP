<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $str = "";
        for ($i=0; $i<strlen($s); $i++) {
            $offset = 1;
            $strTmp = $s[$i];
            while ($i - $offset >=0 && $i + $offset <= strlen($s) && $s[$i - $offset] == $s[$i + $offset]) {
                $strTmp = $s[$i - $offset].$strTmp.$s[$i + $offset];
                $offset++;
            }
            if (strlen($strTmp) > strlen($str)) {
                $str = $strTmp;
            }
            //以两个数字为中心
            if (isset($s[$i + 1]) && $s[$i] == $s[$i + 1]) {
                $strTmp = $s[$i].$s[$i + 1];
                $offset = 1;
                while ($i - $offset >=0 && $i + 1 + $offset <= strlen($s) && $s[$i - $offset] == $s[$i + 1 + $offset]) {
                    $strTmp = $s[$i - $offset].$strTmp.$s[$i + 1 + $offset];
                    $offset++;
                }
                if (strlen($strTmp) > strlen($str)) {
                    $str = $strTmp;
                }
            }
        }
        return $str;
    }
}

$a = new Solution();
echo $a->longestPalindrome("ac");

