<?php

/*
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

function getRandomArray($min, $max, $nItems)
{

    $newArray = [];

    if (($max - $min) < $nItems) {
        $nItems = $max - $min;
    }

    while (count($newArray) <  $nItems) {
        $number = rand($min, $max);
        if (!in_array($number, $newArray)) {
            $newArray[] = $number;
        }
    }

    return $newArray;
}

$arrayDaStampare = getRandomArray(1, 100, 15);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>
    <h1 style="text-align: center;">Snack 4</h1>

    <h3>Lista di 15 numeri casuali univoci da 1 a 100</h3>
    <ul>
        <?php for ($i = 0; $i < count($arrayDaStampare); $i++) {
            $numero = $arrayDaStampare[$i];
            echo "<li> {$numero} </li>";
        } ?>
    </ul>


</body>

</html>