<!--Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.-->

<?php

function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'addition':
            return $num1 + $num2;
        case 'subtraction':
            return $num1 - $num2;
        case 'multiplication':
            return $num1 * $num2;
        case 'division':
            return $num2 != 0 ? $num1 / $num2 : 'Ошибка: деление на ноль';
        default:
            return 'Ошибка: неизвестная операция';
    }
}

$operation ='multiplication';
echo (calculate(2,3,$operation));
