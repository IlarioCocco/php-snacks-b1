<?php

$name = $_GET['nome'];
$eta = $_GET['eta'];
$mail = $_GET['mail'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <title>snack 2</title>
    <h2>Esercizio snack 2</h2>
    <hr>
    <h2><?php echo $name; ?></h2>
    <h2><?php echo $eta; ?></h2>
    <h2><?php echo $mail; ?></h2>
</body>

</html>