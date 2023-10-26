<?php

//378. Kth Smallest Element in a Sorted Matrix
//https://leetcode.com/problems/kth-smallest-element-in-a-sorted-matrix/

class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($matrix, $k) 
    {
       $flattened = call_user_func_array('array_merge', $matrix);
       
       return $output = $flattened[$k-1];
    }
}

    $input = [[1,5,9],[10,11,13],[12,13,15]];
    $n=8;
    $ans = new Solution();
    $res = $ans->kthSmallest($input, $n);

    echo $res;
