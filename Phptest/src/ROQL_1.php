<?php 
     function calcFactorial($num)  // This function will calculate the factorial of variable passed in arguement.
     {
       try
       {
           
           if (is_null($num))
           {
               throw new Exception('NULL Value Exception.');
           }
           else 
           {
               $result = 1;
               for($i = 1; $i<=$num;$i++)
               {
                   $result = $result * $i;
               }
               echo "<br>Factorial is ".$result;
           }
       }
       catch(Exception $e)
       {
           echo '<br>Caught exception: ',  $e->getMessage();
       }
	   
	   $result = RNCPHP\ROQL::queryObject("SELECT Contact From Contact");  

	   $result = RNCPHP\ROQL::queryObject("SELECT Contact From Contact"); 
     }
    
     $x = 4;   
     $y;  
     calcFactorial($x);   // Will not throw error as $x has a valid value assigned.
     calcFactorial($y);   // Will throw error as $y has no value assigned.
?>