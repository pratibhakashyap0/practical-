<?php
// Step 1: Store numbers in an array
$numbers = array(45, 12, 89, 33, 7, 56);

// Display original array
echo "<h3>Original Array:</h3>";
print_r($numbers);

// Step 2: Sort in ascending order using sort()
sort($numbers);
echo "<h3>Array in Ascending Order:</h3>";
print_r($numbers);

// Step 3: Sort in descending order using rsort()
rsort($numbers);
echo "<h3>Array in Descending Order:</h3>";
print_r($numbers);
?>
