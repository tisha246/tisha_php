<!-- Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total. -->

<?php

// Integer array called numbers
$numbers = [10, 20, 30, 40, 50];

// Initialize total to 0
$total = 0;

// Loop through the array to calculate the total
for ($i = 0; $i < count($numbers); $i++) {
    // Add each element to the total
    $total += $numbers[$i];
}

// Print the total
echo "Total: $total";

?>
