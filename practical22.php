<?php
// Create an indexed array
$arr=array();

for ($i=0;$i<10;$i++)
     {
    $arr[$i]=$i+1; // Store 1 to 10
}

// Print using foreach loop
echo "Indexed Array Elements:<br>";
foreach ($arr as $index=>$value) 
    {
    echo "Index $index=$value <br>";
}
?>