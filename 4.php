<?php
class Solution {
    
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $num = array();
        $mid = array();
        $midMax = (count($nums1) + count($nums2)) / 2;
        $midMax = floor($midMax);
        if ((count($nums1) + count($nums2)) % 2 == 0) {
            $mid[(count($nums1) + count($nums2)) / 2] = 0;
            $mid[(count($nums1) + count($nums2)) / 2 - 1] = 0;
        } else {
            $mid[(count($nums1) + count($nums2)) / 2] = 0;
        }

        $current = -1;
        $current1 = 0;
        $current2 = 0;
        $currentNum = 0;
        while (true) {
            $current++;
            if ($current > $midMax) {
                break;
            }
            if (isset($nums1[$current1]) && isset($nums2[$current2])) {
                if ($nums1[$current1] < $nums2[$current2]) {
                    $currentNum = $nums1[$current1];
                    $current1++;
                } else {
                    $currentNum = $nums2[$current2];
                    $current2++;
                }
            } else if (!isset($nums1[$current1])) {
                $currentNum = $nums2[$current2];
                $current2++;
            } else if (!isset($nums2[$current2])) {
                $currentNum = $nums1[$current1];
                $current1++;
            }
            echo $currentNum.PHP_EOL;
            if (isset($mid[$current])) {
                $mid[$current] = $currentNum;
            }
        }
        print_r($mid);
        $mid = array_values($mid);
        if (count($mid) == 2) {
            return ($mid[0] + $mid[1]) / 2;
        } else {
            return $mid[0];
        }
    }
}

$a = new Solution();
echo $a->findMedianSortedArrays([1,2], [3, 4]);