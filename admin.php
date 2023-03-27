<?php
$json_str = file_get_contents("users.txt");
$users = json_decode($json_str, true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <?php foreach ($users as $user => $value): ?>
        <tr>
            <td><?= $user ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
