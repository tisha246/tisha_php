<!-- Get random values from array -->

<?php

$array = array('a', 'b', 'c', 'd', 'e');
$random_keys = array_rand($array, 3);
$random_values = array();

foreach ($random_keys as $key) {
    $random_values[] = $array[$key];
}

print_r($random_values);

?>
