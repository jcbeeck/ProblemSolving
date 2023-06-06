<?php

    class ApiValidation 
    {
        // Properties
        public $data;
        public $rawdata;

        public $stack;

        // Methods
    
        function getMessage()
        {
            $this->rawdata = file_get_contents("message.json");
            //Put the json into an array
            $this->data = json_decode($this->rawdata, true);

            //var_dump($this->data[0]);
            //var_dump($this->data);
        
        }

        function validationMessage()
        {
             $this->stack = array();
 
             for($i = 0; $i < count($this->data); $i++)
             {
                 foreach($this->data[$i] as $k => $val) 
                 {
                     if($k == "email")
                     {
                         // Remove all illegal characters from email
                         $email = filter_var($val, FILTER_SANITIZE_EMAIL);
             
                         if(filter_var($email, FILTER_VALIDATE_EMAIL))
                         {
                             array_push($this->stack, 400);
                         }
                         else{
                             array_push($this->stack, 200);
                         }
                     }
             
                     if($k == "name")
                     {
                         if(preg_match('/^[a-zA-Z\s]+$/', $val))
                         {
                             array_push($this->stack, 400);
                         }
                         else{
                             array_push($this->stack, 200);
                         }
                     }
             
                     if($val === null){
                         array_push($this->stack, 200);
                     }
             
                 }//end foreach
             }//end for
         
        }   


       function findAnswer()
       {
            $a = min($this->stack);

            $b = max($this->stack);

            if ($a < $b)
            {
                return $a;
            }
            else{
                return $b;
            }
       }
            

    }//end class

$api = new ApiValidation();

$api->getMessage();

$api->validationMessage();

$ans = $api->findAnswer();

echo $ans;


?>