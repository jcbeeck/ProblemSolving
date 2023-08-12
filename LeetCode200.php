<?php

    //200. Number of Islands
    //https://leetcode.com/problems/number-of-islands/

    class Solution {

        /**
         * @param String[][] $grid
         * @return Integer
         */

        public $y;

        function numIslands($grid)
        {
            
            //Create a mirror of the grid + frame
            for($i = 0; $i < count($grid) + 2; $i++) //rows
            {
                for($j = 0; $j < count($grid[0]) + 2; $j++) //cols
                {
                    $mirror[$i][$j] = 0;    
                    
                }
            }

            //print_r($mirror); 

            for($i = 0; $i < count($grid); $i++) //rows
            {
                for($j = 0; $j < count($grid[0]); $j++) //cols
                {
                    $mirror[$i+1][$j+1] = $grid[$i][$j];    
                    
                }
            }

            //print_r($mirror); 

            $island = 0;

            for($x = 1; $x <= 5; $x++) //rows
            {
                for($this->y = 1; $this->y <= 5; $this->y = $this->y + 2) //cols
                {
                    if ($this->y == 6){break;}

                    //criterion 1
                    if($mirror[$x+1][$this->y-1] == 1)
                    {
                        $island = $island + 1;
                    }
                    
                    //criterion 2
                    if($mirror[$x][$this->y] == 1)
                    {
                        $island = $island + 1;
                    }            
                }
                
            }//end 2-for


            if($this->y >= 5)
            {
                // smaller table
                $ans = intdiv($island, $this->y);
            }
            else
            {
                $ans = intdiv($island, 2);
            }

            return $ans;
            
        } // end f()

    }//end class

    $island = new Solution();

    $grid = [
            ["1","1","1","1","0"],
            ["1","1","0","1","0"],
            ["1","1","0","0","0"],
            ["0","0","0","0","0"]];
  
           /* $grid = [
                ["1","1","0","0","0"],
                ["1","1","0","0","0"],
                ["0","0","1","0","0"],
                ["0","0","0","1","1"]
            ]; */
  

    $res = $island->numIslands($grid);

    echo $res;
   

?>
