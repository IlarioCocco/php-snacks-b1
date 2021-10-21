<?php
//Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
//Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$alunni = [
    [
        "nome" => "Franco",
        "cognome" => "Ciccio",
        "voti" => [1,4,3,4,5,]
    ],

    [
        "nome" => "Sandro",
        "cognome" => "Rossi",
        "voti" => [1, 7, 6, 4, 5,]
    ],

    [
        "nome" => "Sara",
        "cognome" => "Pani",
        "voti" => [1,9, 3, 7, 5,]
    ],
];

function calcolo($numeri) {

    $somma = 0;
    
    foreach($numeri as $numero) {
        $somma += $numero;
    }

    return round($somma / count($numeri), 2);
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
    <h2>
        <?php foreach ($alunni as $valore) { ?>
        <h3><?php echo "{$valore["nome"]} {$valore["cognome"]}:"; ?></h3>
        <p>media: <?php echo calcolo($valore["voti"]); ?></p>
        <?php } ?>
    </h2>
</body>
</html>