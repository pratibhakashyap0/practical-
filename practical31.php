<?php
//  Create an existing associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

// Add new key-value pair
$countries["Germany"] = "Berlin";

// Print updated array using foreach
echo "<h3>Updated List of Countries and their Capitals:</h3>";
foreach ($countries as $country => $capital) {
    echo "Country: <b>$country</b> - Capital: <b>$capital</b><br>";
}
?>
