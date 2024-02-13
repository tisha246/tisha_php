<!-- What will be the values of $a and $b after the code below is executed? -->

<?php

$a = '1';
$b = &$a;
$b = "2$b";

echo "Value of b is $b  "; // Output: Value of $a: 21

?>
