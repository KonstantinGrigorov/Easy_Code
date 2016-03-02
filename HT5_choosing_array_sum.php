<?php

/*5. Написать функцию, которая принимает на вход 2 массива и возвращает true, если сумма элементов первого массива больше, 
false - если сумма элементов первого массива меньше.*/

function ChoosingArraySum($array1, $array2) {

   $sum1 = 0;
   foreach ($array1 as $element1) {
       $sum1 += $element1;
   }  
   $sum2 = 0;
   foreach ($array2 as $element2) {
       $sum2 += $element2;
   }    
     if ($sum1>$sum2)
   	{
   		return true;
   	}
   else {
   	return false;
		}
}


$array1=array(300, 51, 5);
$array2=array(100, 0, 1);
ChoosingArraySum($array1, $array2);
echo ChoosingArraySum($array1, $array2);
var_dump(ChoosingArraySum($array1, $array2));
?>