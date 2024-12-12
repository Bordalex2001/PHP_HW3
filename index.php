<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $answers = ['A', 'C', 'B', 'D', 'A', 'C', 'B', 'D', 'A', 'C'];
    $points = 0;

    foreach ($_POST as $key => $value)
    {
        if (isset($answers[$key]) && $answers[$key] == $value)
        {
            $points += 1;
        }
    }

    $_SESSION['page1_points'] = $points;
    header("Location: page2.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
</head>
<body>
    <h1>Questions with one answer</h1>
    <form method="post">
        <?php for ($i = 0; $i < 10; $i++): ?>
        <p>
            Question <?= $i + 1 ?><br>
            <label><input type="radio" name="rQuest<?= $i + 1 ?>" value="A">a)</label>
            <label><input type="radio" name="rQuest<?= $i + 1 ?>" value="B">b)</label>
            <label><input type="radio" name="rQuest<?= $i + 1 ?>" value="C">c)</label>
            <label><input type="radio" name="rQuest<?= $i + 1 ?>" value="D">d)</label>
        </p>
        <?php endfor; ?>
        <button>Next</button>
    </form>
</body>
</html>