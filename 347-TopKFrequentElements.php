<?php

//347. Top K Frequent Elements
//https://leetcode.com/problems/top-k-frequent-elements/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $counts = array_count_values($nums);

        $stack = [];

        foreach (array_keys($counts) as $key) 
        {
            array_push($stack, $key);
        }

        $answer = [];

        $flag = 0;
        for($i=0; $i < $k; $i++)
        {
            array_push($answer, $stack[$i]);
        }
        
        return $answer;


    } //end f()
} //end class

$input = [1,1,1,2,2,3];
$ans = new Solution();
$e = 2;
$res = $ans->topKFrequent($input,$e);
    
//print_r($res);

?>
