<?php
// $sum = 0;
// $str = '';
// for($i = 1; $i<=10; $i++) {
//     $sum = $sum + $i;
//     $str .= $i == 10 ? $i." = " : $i." + ";
// }
// echo $str.$sum;


// for($i=0;$i<=4;$i++)
// {
// for($j=0;$j<=$i;$j++)
// {
// echo "* ";
// }
// echo "<br>";
// }
// echo "<br>";

// for($i=0;$i<=5;$i++)
// {
// for($j=5-$i;$j>=1;$j--)
// {
// echo "* ";
// }
// echo "<br>";
// }


// for ($row = 1; $row <= 5; $row++)
// {
//  for ($col = 1; $col <= 4; $col++)
//   {
//    echo '* ';
//   }
//    echo "</br>";
// }



// for ($row=0; $row<7; $row++)
// {
//   for ($column=0; $column<=7; $column++)
// 	{
//      if ($column == 1 or (($row == 0 or $row == 6) and ($column > 1 and $column < 6)) or ($row == 3 and $column > 1 and $column < 5))
//             echo "*";    
//         else  
//             echo " ";     
// 	}        
//   echo "\n";
// }






$num = 3;  
$fac = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $fac = $fac * $x;  
}  
echo "Factorial of $num is $fac";  

?>