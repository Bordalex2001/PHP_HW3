<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $answers = ['apple', 'balloon', 'coffee', 'diamond', 'elephant', 'galaxy', 'horizon', 'island', 'jupiter', 'kangaroo'];
    $points = 0;

    foreach ($_POST as $key => $value)
    {
        if (isset($answers[$key]) && $answers[$key] == strtolower($value))
        {
            $points += 5;
        }
    }

    $_SESSION['page3_points'] = $points;
    header('Location: results.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 3</title>
</head>
<body>
    <h1>Open-ended questions</h1>
    <form method="post">
        <?php for ($i = 0; $i < 10; $i++): ?>
        <p>
            Question <?= $i + 1 ?><br>
            <label><input type="text" name="tQuest<?= $i + 1 ?>"></label>
        </p>
        <?php endfor; ?>
        <button>Finish</button>
    </form>
</body>
</html>