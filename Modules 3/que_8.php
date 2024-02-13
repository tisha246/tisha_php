<!-- Write a program for this Pattern: 
***** 
*
*
*
***** -->

<?php
    $size = 5;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($i == 0 || $i == $size - 1 || $j == 0) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }

?>