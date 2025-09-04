<?php
// Step 1: Indexed Array banaye
$numbers = array(10, 20, 30, 40, 50);

// Step 2: Sum nikalne ke liye ek variable banaye
$sum = 0;

// Step 3: foreach loop ka use karke numbers add kare
foreach($numbers as $num){
    $sum = $sum + $num;
}

// Step 4: Result print kare
echo "Array me numbers ka sum hai:".$sum;
?>