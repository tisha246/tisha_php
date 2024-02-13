<!-- How can you declare the array (all type) in PHP? Explain with example -->

<?php

// Indexed Array: An indexed array is a simple array where each element is assigned a numeric index starting from zero. It's the most common type of array in PHP.
$indexedArray = ["apple", "banana", "orange"];
print_r($indexedArray);
echo "<br>";
// Associative Array: An associative array uses named keys instead of numeric indices to access elements. Each element in an associative array is associated with a specific key-value pair.
$assocArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
print_r($assocArray);
echo "<br>";
// Multidimensional Array: A multidimensional array is an array that contains one or more arrays as its elements. These arrays can be indexed or associative arrays themselves.
$multiArray = [
    ["apple", "banana", "orange"],
    ["John", "Doe", "30"],
    ["New York", "USA"]
];
print_r($multiArray);
echo "<br>";

//Mixed values
$array = [1, "two", 3.14, true];
print_r($array);
?>