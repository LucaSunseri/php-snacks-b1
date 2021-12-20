<?php

/*
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

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
    <title>Snack 6</title>
</head>

<body>
    <h1 style="text-align: center;">Snack 6</h1>

    <div style="border: 4px solid grey; display:inline-block">
        <h3>Insegnati</h3>
        <ul style="margin-right: 25px;">
            <?php
            for ($i = 0; $i < count($db); $i++) {
                $teachers = $db['teachers'][$i];
                echo "<li> {$teachers['name']} {$teachers['lastname']} </li>";
            }
            ?>
        </ul>
    </div>
    <div style="border: 4px solid green; display:inline-block;">
        <h3>PM</h3>
        <ul style="margin-right: 25px;">
            <?php
            for ($i = 0; $i < count($db); $i++) {
                $pm = $db['pm'][$i];
                echo "<li> {$pm['name']} {$pm['lastname']} </li>";
            }
            ?>
        </ul>
    </div>


</body>

</html>