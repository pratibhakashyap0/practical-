
<?php
// Check if 'name' is passed in the URL
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // Prevent XSS by escaping HTML
    echo "Hello, ".$name;
} else {
    echo "Hello, Guest!";
}
?>
