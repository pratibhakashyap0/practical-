<?php
// Student Information
$name = "XYZ";

$subjects = [
    ["name" => "Sub1", "max" => 50, "obtained" => 40],
    ["name" => "Sub2", "max" => 50, "obtained" => 30],
    ["name" => "Sub3", "max" => 50, "obtained" => 45],
    ["name" => "Sub4", "max" => 50, "obtained" => 48],
    ["name" => "Sub5", "max" => 50, "obtained" => 34],
];

// Calculate Total Marks
$totalMax = 0;
$totalObtained = 0;
foreach ($subjects as $sub) {
    $totalMax += $sub['max'];
    $totalObtained += $sub['obtained'];
}

// Calculate Percentage
$percentage = ($totalObtained / $totalMax) * 100;

// Determine Result
if ($percentage >= 75) {
    $result = "With Distinction";
} elseif ($percentage >= 60) {
    $result = "First Class";
} elseif ($percentage >= 40) {
    $result = "Pass";
} else {
    $result = "Fail";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin: auto;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Marksheet</h2>
    <p><b>Name :</b> <?php echo $name; ?></p>
    
    <table>
        <tr>
            <th>Subject Name</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
        </tr>
        <?php foreach ($subjects as $sub) { ?>
            <tr>
                <td><?php echo $sub['name']; ?></td>
                <td><?php echo $sub['max']; ?></td>
                <td><?php echo $sub['obtained']; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <th>Total</th>
            <th><?php echo $totalMax; ?></th>
            <th><?php echo $totalObtained; ?></th>
        </tr>
        <tr>
            <th colspan="2">Percentage</th>
            <td><?php echo round($percentage, 1); ?>%</td>
        </tr>
        <tr>
            <th colspan="2">Result</th>
            <td><?php echo $result; ?></td>
        </tr>
    </table>
</body>
</html>
