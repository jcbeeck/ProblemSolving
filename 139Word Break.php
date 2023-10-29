<?php

    //139. Word Break
    //https://leetcode.com/problems/word-break/

    class Solution 
    {
            /**
         * @param String $s
         * @param String[] $wordDict
         * @return Boolean
         */
        function wordBreak($s, $wordDict)
        {
            $dicString = implode(" ", $wordDict);

            $dicString = str_replace(' ', '', $dicString);

            $result = strcmp($s, $dicString);

            if ($result == 0) {
                return 1; //true
            } else {
                return 0;
            }
        }
    }

    $input = "catsandog";
    $dic = ["cats","dog","sand","and","cat"];

    //$input = "leetcode";
    //$dic = ["leet","code"];

    $ans = new Solution();
    $res = $ans->wordBreak($input, $dic);

    print($res);
