<?php  
function Factorial ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * Factorial($n - 1);  
    }  
}  
  
echo "Factorial of 6 is " .Factorial(3);  
?>  