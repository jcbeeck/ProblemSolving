<?php

    //Leetcode 1209. Remove All Adjacent Duplicates in String II
    //https://leetcode.com/problems/remove-all-adjacent-duplicates-in-string-ii/

    //Solution using the Sliding Window Approach

  class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function removeDuplicates($s, $k)
    {
        $stack = [];

        //start the window from the end
        $f = strlen($s) -1;
        $i = $f - 1;

        $split = str_split($s,1);

        $acum = 1;

        for(; $f >= 0; $i--, $f--)
        {  
            if($i == 0) {break;}
            
            if($split[$i] == $split[$f])
            {
                $acum = $acum + 1;
                array_push($stack, $acum);
            }
            
            elseif($split[$i] != $split[$f])
            {
                $acum = 1;
            }
        }

        $result = array_unique($stack);

        $ind = $result[0]; //2

        return $split[strlen($s) -1].$split[strlen($s) -2];
        
    }// end f()
}

$s = "deeedbbcccbdaa"; 
$k = 3;

$ans = new Solution();
$res = $ans->removeDuplicates($s, $k);

echo $res; //aa
