<?php
session_start();
$counter = $_SESSION["counter"] ?? 0;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Четвертая страница</title>
</head>
<body>
    <p>Третья страница была открыта <?= $counter ?> раз(а)</p>
</body>
</html>