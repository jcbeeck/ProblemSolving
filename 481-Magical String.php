<?php

 //481. Magical String
 //https://leetcode.com/problems/magical-string/

    class Solution {

        /**
         * @param Integer $n
         * @return Integer
         */
        function magicalString($n)
        {
            $zeros = array_fill(0, $n, 0);

            $zeros[0] = 1;

            for($i=1; $i < $n; )
            {
                if($n == $i) {break;}

                else
                {
                    $zeros[$i] = 2;
                    $i++;
                    $zeros[$i] = 2;
                    $i = $i + 3;

                    if($i > $n){break;}
                }
            }

            //print_r($zeros);

            $zerosArray = array_filter($zeros, function($element) {
                return $element === 0;
            });

            $countZeros = count($zerosArray);

            return $countZeros + 1;
        }

    }//end class

    $input = 6;
    $ans = new Solution();
    $res = $ans->magicalString($input);

    echo $res;
