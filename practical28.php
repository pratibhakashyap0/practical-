<?php
// Step 1: Store some numbers in an array
$numbers = array(10, 25, 30, 45, 50);

// Step 2: Value to check
$valueToCheck = 30;

// Step 3: Use in_array() to check if value exists
if (in_array($valueToCheck, $numbers)) {
    echo "The value $valueToCheck exists in the array.";
} else {
    echo "The value $valueToCheck does NOT exist in the array.";
}
?>
