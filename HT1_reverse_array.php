

<?php
/*1. Написать функцию которая принимает массив и возвращает массив с элементами в обратном порядке. Пример:
array(1, 2, 3) => array(3, 2, 1)*/





 function reverse_array_own($array)
{
$elements_count = count($array);
$result = array();
for($i = $elements_count; $i >= 1; $i--)
{
$result[] = $array[$i - 1];
}
return $result;
}

$array = array(1,2,3,"hello",5, "world");
reverse_array_own ($array);
var_dump(reverse_array_own($array));
print_r($array);

?>