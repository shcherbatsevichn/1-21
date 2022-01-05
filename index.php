<?php 
error_reporting(-1);
// Даны  натуральные  числа  N  и  M.  Определить,  являются  ли  они  взаимно простыми числами. 
//Взаимно простые числа не имеют общих делителей, кроме единицы.  
$n = 18;
$m = 13;

if(isjust($n, $m)){
   echo("Числа {$n} и {$m} являются взаимно простыми.");
}else{
    echo("Числа {$n} и {$m} не являются взаимно простыми.");
}
//--------------------Функция проверяет, являются ли два числа взаимно простыми
function isjust($number1, $number2){
    if($number1 < $number2){    
        if(countdiff($number1, $number2) == 1){
            return true;
        }else{
            return false;
        }
    }
    if($number1 > $number2){    
        if(countdiff($number2, $number1) == 1){
            return true;
        }else{
            return false;
        }
    }
    if($number1 == $number2){    
        return false;
    }
}
//-------------Функция считает количество общих делителей
function countdiff($num1, $num2){
    $counter = 0;
    $diff1 = 0;
    $diff2 = 0;
    for ($i = 1; $i <= $num2; $i++){
        if ($num1 % $i == 0){
            $diff1 = $i;
        }
        if ($num2 % $i == 0){
            $diff2 = $i;
        }
        if($diff1 == $diff2){
            $counter++;
        }
    } 
    return $counter;
}