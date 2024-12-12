<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $answers = [['A', 'C'], ['B', 'D'], ['A', 'B', 'C'], ['B', 'C'], ['A', 'D'],
        ['B', 'C', 'D'], ['C', 'D'], ['A', 'B'], ['A', 'C', 'D'], ['A', 'B', 'D']];
    $points = 0;

    foreach ($_POST as $key => $values)
    {
        if (isset($answers[$key]))
        {
            $correct = $answers[$key];
            $selected = array_intersect($values, $correct);
            if (count($selected) === count($correct))
            {
                $points += 3;
            }
        }
    }

    $_SESSION['page2_points'] = $points;
    header("Location: page3.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
</head>
<body>
    <h1>Questions with some answers</h1>
    <form method="post">
        <?php for ($i = 0; $i < 10; $i++): ?>
        <p>
            Question <?= $i + 1 ?><br>
            <label><input type="checkbox" name="cQuest<?= $i + 1 ?>" value="A">a)</label>
            <label><input type="checkbox" name="cQuest<?= $i + 1 ?>" value="B">b)</label>
            <label><input type="checkbox" name="cQuest<?= $i + 1 ?>" value="C">c)</label>
            <label><input type="checkbox" name="cQuest<?= $i + 1 ?>" value="D">d)</label>
        </p>
        <?php endfor; ?>
        <button>Next</button>
    </form>
</body>
</html>