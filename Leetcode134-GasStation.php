<?php

 //Leetcode 134. Gas Station
 // https://leetcode.com/problems/gas-station/

class Solution {

    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost) 
    {
        $s = count($gas);

        $stack = [];

        $i = 0;

        //Find the starting point
        for(; $s < $i; $i++)
        {
            if($gas[$i] >= $cost[0])
            {
                $ini = $gas[$i];
            }
        }

        $val = $cost[$i] - $ini;
        array_push($stack, $val);
        $i++;

        while (count($stack) < $s)
        {
            if(count($stack)+1 > $s) {
                return $stack[0];
            }

            if($i == $s) {$i = 0;}

            $ini = $cost[$i];
            $val2 = end($stack);
            $val = $val2 - $ini;
            array_push($stack, $val);

            if(end($stack) < 0) {return -1;}
            $i++;
        }

        return $stack[0];
    
    }//end f()

}//end class

//$g = [1,2,3,4,5];
//$c = [3,4,5,1,2];

$g = [2,3,4];
$c = [3,4,3];

$ans = new Solution();
$res = $ans->canCompleteCircuit($g, $c);

echo $res; 
