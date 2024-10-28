<!--Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты.-->

<?php
function getCurrentTimeWithDeclensions($timezone = 'Europe/Moscow') {

    date_default_timezone_set($timezone);
    $hours = date('G');
    $minutes = date('i');

    $hourDeclension = ['час', 'часа', 'часов'];
    $minuteDeclension = ['минута', 'минуты', 'минут'];

    $hourForm = ($hours % 10 == 1 && $hours % 100 != 11) ? 0 : (($hours % 10 >= 2 && $hours % 10 <= 4) && ($hours % 100 < 10 || $hours % 100 >= 20) ? 1 : 2);
    $minuteForm = ($minutes % 10 == 1 && $minutes % 100 != 11) ? 0 : (($minutes % 10 >= 2 && $minutes % 10 <= 4) && ($minutes % 100 < 10 || $minutes % 100 >= 20) ? 1 : 2);

    return "$hours " . $hourDeclension[$hourForm] . " $minutes " . $minuteDeclension[$minuteForm];
}
echo getCurrentTimeWithDeclensions();