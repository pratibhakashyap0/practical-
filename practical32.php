<?php
// Create an associative array of students and their marks
$students = array(
    "Amit" => 85,
    "Neha" => 92,
    "Rahul" => 78,
    "Priya" => 88,
    "Suresh" => 90
);

// Update marks of one student (e.g., Rahul)
$students["Rahul"] = 95; // Updating Rahul's marks

// Print the updated array
echo "<h3>Updated List of Students and Their Marks:</h3>";
foreach ($students as $name => $marks) {
    echo "Student: <b>$name</b> - Marks: <b>$marks</b><br>";
}
?>
