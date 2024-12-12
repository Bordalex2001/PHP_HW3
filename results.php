<?php
session_start();
$total_points = ($_SESSION['page1_points'] ?? 0) +
    ($_SESSION['page2_points'] ?? 0) +
    ($_SESSION['page3_points'] ?? 0);
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>
<body>
    <h1>Test results</h1>
    <p>Page 1: <?= $_SESSION['page1_points'] ?? 0 ?> points</p>
    <p>Page 2: <?= $_SESSION['page2_points'] ?? 0 ?> points</p>
    <p>Page 3: <?= $_SESSION['page3_points'] ?? 0 ?> points</p>
    <p><b>Total: <?= $total_points ?> points</b></p>
</body>
</html>

