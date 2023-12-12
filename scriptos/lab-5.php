<?php
// Генерация случайных аргументов
$a = rand(-20, 20);
$b = rand(-20, 20);
$c = rand(-20, 20);
$d = rand(-20, 20);

// Вычисление значения выражения
$result = ((($c - $d / 2) * ($b - 7)) / (2 * $a - 1));

// Вывод формулы и результата
$formula = "((c-d/2)*(b-7))/(2*a-1)";
$formula = str_replace('a', $a, $formula);
$formula = str_replace('b', $b, $formula);
$formula = str_replace('c', $c, $formula);
$formula = str_replace('d', $d, $formula);

echo "Формула: $formula<br>";
echo "Результат вычислений: $result";
?>
