<?php

// Determine If a Sudoku Board Is Valid 

 function validateRow($sudoku)
  {
    $validation = 1;
    
    for ($i = 0; $i < 9; $i++)
    {
      for ($j = 0; $j < 9; $j++)
      {
        $item = $sudoku[$i][$j];
        
        for ($pos = 1 ; $pos < 9 ; $pos++ )
        {
          if(strcmp($item,$sudoku[$i][$pos]) == 0)
           {
             $validation = 0; // No Valid
            
             break;
           }
        }//for
        
        
      }//inner-for

    }//end For
  
    //echo "validation:";
	  return $validation;
	  
  }//end f()
  
  function validateCol($sudoku)
  {
    $validation = 1;
    
    $col = 0;
    
    while($col < 9)
    {
      for($i = 0; $i < 9 ; $i++)
      {
        $item = $sudoku[$i][$col];
        
        for ($pos = 1 ; $pos < 9 ; $pos++ )
        {
          if(strcmp($item,$sudoku[$i][$pos]) == 0)
           {
             $validation = 0; // No Valid
            
             break;
           }
        }//for
        
      }//inner-for
      
      $col++;
      
    }// end-while
	  return $validation;

}//end validateCol

  function validateBox($sudoku)
  {
    $mask = array();
    
    $validation = 1;

    $box = 1;
    
    $mask = [0,0,0,1,0,2,
             1,0,1,1,1,2,
             2,0,2,1,2,2 ];   
     
    while ($box <= 9)
    {
     $i = 0;
    		
    	while($i < 18)
    	{
          $r = $mask[$i];
          $c = $mask[$i+1];
          
          if(strcmp($sudoku[$r][$c],$sudoku[$r+1][$c+1]) == 0)
          {
             $validation = 0; // No Valid
             break;
          }
          else
          {
            $i++;
          }      
    	}//end inner-while	
    	
    	$box++;
    	
    }//end while boxes
    
    return $validation;
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
  
  $boxes = validateBox($board);
  echo "the Sudoku Box validation is:".$boxes;
  echo "\n";
	
?>
