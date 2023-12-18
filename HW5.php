<?php
// Спосіб 1
function fibonacci ($f)
{
    $a = 0;
    $b = 1;
    echo $a . " " . $b . " ";

    $sum = $a + $b;
    for ($i = 1; $i <= $f - 2; $i++)
        {
        $c = $a + $b;
        $a = $b;
        $b = $c;
        echo $c . " ";
        $sum += $c;
        }
    echo PHP_EOL . "sum = " . $sum;
}
fibonacci(20);

echo PHP_EOL .PHP_EOL;
// Спосіб 2
function fib2 ($f2)
{
    $fib = [0, 1];

    for ($k = 2; $k < $f2; $k++) {
        $fib[$k] = $fib[$k - 1] + $fib[$k - 2];
    }
    $summ = 0;
    foreach ($fib as $fibonacci) {
        echo $fibonacci . " ";
        $summ += $fibonacci;
    }
    echo PHP_EOL ."sum 2 = " . $summ;
}
fib2(21);