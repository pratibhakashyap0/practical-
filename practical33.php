<?php
// Step 1: Create an associative array
$students = array(
    "Amit" => 85,
    "Neha" => 92,
    "Rahul" => 78,
    "Priya" => 88,
    "Suresh" => 90
);

// Step 2: Key to check
$keyToCheck = "Rahul";

// Step 3: Use array_key_exists() to check if key exists
if (array_key_exists($keyToCheck, $students)) {
    echo "Key '$keyToCheck' exists in the array. Marks: " . $students[$keyToCheck];
} else {
    echo "Key '$keyToCheck' does NOT exist in the array.";
}
?>
