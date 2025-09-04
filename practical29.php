<?php
// Create an indexed array with duplicate values
$numbers = array(10, 20, 30, 20, 40, 10, 50);

// Display original array
echo "<h3>Original Array:</h3>";
print_r($numbers);

// Remove duplicate values using array_unique()
$uniqueNumbers = array_unique($numbers);

// Display array after removing duplicates
echo "<h3>Array After Removing Duplicates:</h3>";
print_r($uniqueNumbers);
?>
