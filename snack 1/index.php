<?php



$partiteBasket = [
    [
        "squadraCasa" => "Virtus Bologna",
        "squadraOspite" => "Trieste",
        "puntiSquadraCasa" => 94,
        "puntiSquadraOspite" => 79
    ],
    [
        "squadraCasa" => "VL Pesaro",
        "squadraOspite" => "Derthona",
        "puntiSquadraCasa" => 81,
        "puntiSquadraOspite" => 72
    ],
    [
        "squadraCasa" => "Cremona",
        "squadraOspite" => "Varese",
        "puntiSquadraCasa" => 78,
        "puntiSquadraOspite" => 88
    ],
    [
        "squadraCasa" => "Dinamo Sassari",
        "squadraOspite" => "Olimpia Milano",
        "puntiSquadraCasa" => 93,
        "puntiSquadraOspite" => 68
    ],
];

for ($i = 0; $i < count($partiteBasket); $i++) {
    echo $partiteBasket[$i]["squadraCasa"] . " - " .
    $partiteBasket[$i]["squadraOspite"] . " | " .
    $partiteBasket[$i]["puntiSquadraCasa"] . " - " .
    $partiteBasket[$i]["puntiSquadraOspite"] . "<br>";
};


// echo"<h2>Campionato Italiano di Basket</h2>";
// echo "<hr>";
// echo"<strong>risultato:</strong>
// {$partiteBasket["0"]["squadraCasa"]} - {$partiteBasket["0"]["squadraOspite"]} | 
// {$partiteBasket["0"]["puntiSquadraCasa"]} - {$partiteBasket["0"]["puntiSquadraOspite"]} <br>";

// echo "<strong>risultato: </strong>{$partiteBasket["1"]["squadraCasa"]} - {$partiteBasket["1"]["squadraOspite"]} | 
// {$partiteBasket["1"]["puntiSquadraCasa"]} - {$partiteBasket["1"]["puntiSquadraOspite"]} <br>";

// echo "<strong>risultato: </strong>{$partiteBasket["2"]["squadraCasa"]} - {$partiteBasket["2"]["squadraOspite"]} | 
// {$partiteBasket["2"]["puntiSquadraCasa"]} - {$partiteBasket["2"]["puntiSquadraOspite"]} <br>";

// echo "<strong>risultato: </strong>{$partiteBasket["3"]["squadraCasa"]} - {$partiteBasket["3"]["squadraOspite"]} | 
// {$partiteBasket["3"]["puntiSquadraCasa"]} - {$partiteBasket["3"]["puntiSquadraOspite"]}";
// // var_dump ($partiteBasket);

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
    <title>snack 1</title>
    <h2>Esercizio snack 1</h2>
    <hr>
</body>

</html>