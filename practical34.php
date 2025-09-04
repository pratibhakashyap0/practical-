<?php
//  Create an associative array of fruits and their prices
$fruits = array(
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 150,
    "Orange" => 80,
    "Grapes" => 90
);

// Sort by values (ascending) using asort()
asort($fruits);
echo "<h3>Fruits Sorted by Price (Ascending):</h3>";
foreach ($fruits as $fruit => $price) {
    echo "Fruit: <b>$fruit</b> - Price: ₹<b>$price</b><br>";
}

//  Sort by keys (alphabetically) using ksort()
ksort($fruits);
echo "<h3>Fruits Sorted by Name (Alphabetically):</h3>";
foreach ($fruits as $fruit => $price) {
    echo "Fruit: <b>$fruit</b> - Price: ₹<b>$price</b><br>";
}
?>
