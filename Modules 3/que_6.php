<!--  Write a program to find whether a number is Armstrong or not -->


<?php

function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $digits = strlen($num);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }

    return ($num == $sum);
}

$num = 153;

if (isArmstrong($num)) {
    echo "$num is an Armstrong number.<br>";
} else {
    echo "$num is not an Armstrong number.<br>";
}

?>