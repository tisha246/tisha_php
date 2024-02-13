<!-- Covert a JSON string to array. -->
<!-- Write a PHP script which decodes the following JSON string. -->

<?php

// JSON string
$jsonString = '{"name": "John", "age": 30, "city": "New York"}';

// Convert JSON string to array
$array = json_decode($jsonString, true);

print_r($array);

?>
