<?php
//  Create an associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

//  Print countries and capitals using foreach
echo "<h3>List of Countries and their Capitals:</h3>";
foreach ($countries as $country => $capital) {
    echo "Country: <b>$country</b> - Capital: <b>$capital</b><br>";
}
?>
