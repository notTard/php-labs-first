<?php
// Генерация случайных чисел N и M
$N = rand(1, 100);
$M = $N + rand(1, 100);

echo "Интервал от $N до $M<br>";

// Поиск чисел, представимых в виде суммы кубов трех натуральных чисел
for ($i = $N; $i <= $M; $i++) {
    $found = false;
    for ($a = 1; $a <= $i; $a++) {
        for ($b = $a; $b <= $i; $b++) {
            for ($c = $b; $c <= $i; $c++) {
                if ($a**3 + $b**3 + $c**3 == $i) {
                    echo "$i = $a^3 + $b^3 + $c^3<br>";
                    $found = true;
                    break 2; // Выход из двух внутренних циклов
                }
            }
        }
    }
}

echo "Этот скрипт генерирует случайные числа N и M,
а затем находит все числа в интервале от N до M,
которые можно представить в виде суммы кубов трех натуральных чисел."
?>
