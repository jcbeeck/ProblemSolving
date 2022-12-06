<?php

// Determine If a Sudoku Board Is Valid 

  function validateRow($sudoku)
  {
    $flag = 0;
    
    for ($i = 0; $i < 9; $i++)
    {
      for ($j = 0; $j < 9; $j++)
      {
        $slice = $sudoku[$i][$j];
        
        if(strcmp($slice,"9") == 0)
        {
          $flag = 1;
          
          break;
        }
      }//inner-for

    }//end For
  
    //echo "the flag is:";
	  return $flag;
	  
  }//end f()
  
  function validateCol($sudoku)
  {
    $flag = 0;
    
    $col = 0;
    
    while($col < 9)
    {
      for($i = 0; $i < 9 ; $i++)
      {
        $slice = $sudoku[$i][$col];
        
        if(strcmp($slice,"9") == 0)
        {
          $flag = 1;
          
          break;
        }
        
      }//inner-for
      
      $col++;
      
    }// end-while
	  return $flag;

}//end validateCol

  function validateBox($sudoku)
  {
    $mask = array();
    
    $flag = 0;

    $box = 1;
     
    while ($box <= 9)
    {
    	$mask = [0,0,0,1,0,2,
                 1,0,1,1,1,2,
                 2,0,2,1,2,2 ];           
    	$k = 0;
    		
    	while($k < 18)
    	{
          $r = $mask[$k];
          $c = $mask[$k+1];
          
          if(strcmp($sudoku[$r][$c],"9") == 0)
          {
             $flag = 1;
             break;
          }
          else
          {
            $k++;
          }      
    	}//end inner-while	
    	
    	$box++;
    	
    }//end while boxes
    
    return $flag;
  }//end validateBox
  
	
 $board = array(array());
	
	$board = [["5","3",".",".","7",".",".",".","."],
	         ["6",".",".","1","9","5",".",".","."],
	         [".","9","8",".",".",".",".","6","."],
	         ["8",".",".",".","6",".",".",".","3"],
	         ["4",".",".","8",".","3",".",".","1"],
	         ["7",".",".",".","2",".",".",".","6"],
	         [".","6",".",".",".",".","2","8","."],
	         [".",".",".","4","1","9",".",".","5"],
	         [".",".",".",".","8",".",".","7","9"]
	        ];

  //$row = validateRow($board);
  //echo "the Sudoku row validation is:".$row;
  //echo "\n";
  
  //$col = validateCol($board);
  //echo "the Sudoku col validation is:".$col;
  //echo "\n";
  
  $boxe = validateBox($board);
  echo "the Sudoku Box validation is:".$boxe;
  echo "\n";
  
  
	
?>