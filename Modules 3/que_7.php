<!--  Write a program to print the below format : 
5 9 
2610 
3711 
4812   -->

<?php
$rows = 4;
$cols = 3;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo $i + $j * $rows . " ";
    }
    echo "<br>";
}
?>
