<?php
// phpinfo();

$name = $_GET['name'];
$eta = $_GET['age'];
$mail = $_GET['mail'];

//La funzione da utilizzare per verificare se una stringa è più lunga 
//di un determinato numero di caratteri in PHP è denominata strlen.
if (strlen($name) > 3) {
    echo "$name";
    echo ": il nome in questione è piu lungo di 3 caratteri";
}



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
    


</body>

</html>