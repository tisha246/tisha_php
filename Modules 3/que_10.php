<!-- How can you tell if a number is even or odd without using any Condition or loop? -->

<?php

$number = 10;
$is_even = !($number & 1);
echo "Is $number even ? " . ($is_even ? "Yes" : "No");

?>
