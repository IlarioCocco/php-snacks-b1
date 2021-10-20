<?php

//Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .boxContainer {
            max-width: 100%;
            margin: auto;
            display: flex;
        }

        .green {
            background: lightgreen;
            width: 50%;
            padding: 10px;
        }

        .gray {
            background: lightgray;
            width: 50%;
            padding: 10px;
        }

        li {
            list-style-type: none;
        }
    </style>

</head>


<body>
    <h2>Esercizio snack 6 php</h2>
    <hr>
    <div class="boxContainer">
        <div class="green">
            <ul>

                <?php foreach ($db["teachers"] as $franco) { ?>
                    <li>
                        <?php echo "{$franco["name"]} : {$franco["lastname"]}"; ?>
                    </li>
                <?php } ?>

            </ul>
        </div>

        <div class="gray">
            <ul>

                <?php foreach ($db["pm"] as $franco) { ?>
                    <li>
                        <?php echo "{$franco["name"]} : {$franco["lastname"]}"; ?>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</body>

</html>