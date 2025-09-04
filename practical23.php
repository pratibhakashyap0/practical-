<?php
// Original Array
$arr = array(50, 10, 40, 30, 20);

echo "<b>Original Array:</b><br>";
print_r($arr);
echo "<br><br>";

// 1. sort() - Sort array in ascending order (values only)
$temp = $arr;
sort($temp);
echo "<b>sort() - Ascending Order:</b><br>";
print_r($temp);
echo "<br><br>";

// 2. rsort() - Sort array in descending order (values only)
$temp = $arr;
rsort($temp);
echo "<b>rsort() - Descending Order:</b><br>";
print_r($temp);
echo "<br><br>";

// 3. asort() - Sort associative array in ascending order (preserve key)
$temp = $arr;
asort($temp);
echo "<b>asort() - Ascending (Preserve Index):</b><br>";
print_r($temp);
echo "<br><br>";

// 4. arsort() - Sort associative array in descending order (preserve key)
$temp = $arr;
arsort($temp);
echo "<b>arsort() - Descending (Preserve Index):</b><br>";
print_r($temp);
echo "<br><br>";

// 5. ksort() - Sort by key in ascending order
$temp = $arr;
ksort($temp);
echo "<b>ksort() - Sort by Key Ascending:</b><br>";
print_r($temp);
echo "<br><br>";

// 6. krsort() - Sort by key in descending order
$temp = $arr;
krsort($temp);
echo "<b>krsort() - Sort by Key Descending:</b><br>";
print_r($temp);
echo "<br><br>";
?>
