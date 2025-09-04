<?php
// Create indexed array
$arr = array();

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = $i + 1; // store 1 to 10
}

// Print indexed array
for ($i = 0; $i < 10; $i++) {
    echo "Index$i=".$arr[$i]."<br>";
}
?>