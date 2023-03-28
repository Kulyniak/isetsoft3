<?php
$json_data = file_get_contents('users.txt');//string
var_dump($json_data);
$users = json_decode($json_data, true);
var_dump($users);//array
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
     <?php foreach($users as $key=>$value): ?>
     <th> <?=$key ?></th>
     <?php endforeach; ?>
 </tr>
    <tr>
        <?php foreach($users as $key=> $value): ?>
            <th> <?=$value ?></th>
        <?php endforeach; ?>
    </tr>
</table>
</body>
</html>
