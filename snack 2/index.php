<?php
// phpinfo();

$name = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['mail'];

//La funzione da utilizzare per verificare se una stringa è più lunga 
//di un determinato numero di caratteri in PHP è denominata strlen.
if (strlen($name) > 3) {
    echo "$name";
    echo ": il nome in questione è piu lungo di 3 caratteri - <br>";
} else {
    echo "il nome è inferiore ai caratteri richiesti";
}

//La funzione da utilizzare per verificare se una stringa è un numero 
//in PHP è denominata is_numeric.
if (is_numeric($age)) {
    echo "$age";
    echo " è un numero  -  <br>";
} else {
    echo "non è un numero -";
}


// funzioni utilizzate per la verifica che nella mail sia presente un punto ed una heat
$verifica = false;

if(!empty($_GET['mail'])) {
    $mail = $_GET['mail'];
    if (strpos($mail, '@') && strpos($mail, '.')) {
        $verifica = true;
        echo "mail completa, Accesso riuscito -";
    } else {
        echo "mail non completa, Accesso negato -";
    }
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