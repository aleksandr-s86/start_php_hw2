<!--Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).-->

<?php
function mathOperation($arg1, $arg2, $operation) {

    switch ($operation) {
        case 'addition':
            return $arg1 + $arg2;
        case 'subtraction':
            return $arg1 - $arg2;
        case 'multiplication':
            return $arg1 * $arg2;
        case 'division':
            return $arg2 != 0 ? $arg1 / $arg2 : 'Ошибка: деление на ноль';
        default:
            return 'Ошибка: неизвестная операция';
    }
    return calculate($arg1, $arg2, $operation);
}
echo mathOperation(3,0,'division');