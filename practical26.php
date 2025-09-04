<?php
// Step 1: Array banaye
$numbers = array(10, 20, 30, 40, 50, 60);

echo "<h3>Without using array_reverse()</h3>";
// Step 2: Manual reverse using for loop
for($i = count($numbers) - 1; $i >= 0; $i--){
    echo $numbers[$i] . " ";
}

echo "<h3>With using array_reverse()</h3>";
// Step 3: Using array_reverse() function
$reversedArray = array_reverse($numbers);

foreach($reversedArray as $num){
    echo $num."";
}
?>