<!-- Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34 -->

<?php

$n = 10;
$a = 0;
$b = 1;

echo "$a, $b";

for ($i = 2; $i < $n; $i++) {
    $c = $a + $b;
    echo ", $c";
    $a = $b;
    $b = $c;
}

?>
