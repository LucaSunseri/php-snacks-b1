<?php

/*
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam provident libero tempora expedita commodi accusantium voluptates voluptas dolorum, sequi maiores iure repellendus quos esse doloremque. Esse impedit voluptatem totam illo, aut aspernatur recusandae deserunt incidunt dolorum, explicabo eaque similique enim voluptatibus repellendus est nisi velit veniam quia beatae facere omnis dolore qui? Voluptas nesciunt quibusdam commodi vero atque, illo optio in suscipit magnam. Ab animi, aliquam hic provident unde dolorem ex veniam exercitationem, voluptatibus corrupti itaque recusandae culpa odio molestiae error nesciunt. Sunt, neque. Ratione inventore odit a necessitatibus! Voluptatum, quod suscipit. Aliquam laudantium fugit vel possimus temporibus? Alias, sit?';

$singoloParagrafo = explode('.', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>

<body>
    <h1 style="text-align: center;">Snack 5</h1>

    <h2>Paragrafo Intero</h2>
    <p>
        <?php print $paragrafo; ?>
    </p>

    <h2>Singoli paragrafi</h2>
    <ul>
        <?php for ($i = 0; $i < count($singoloParagrafo); $i++) {
            $paragrafo = $singoloParagrafo[$i];
            echo "<li> {$paragrafo} </li>";
        } ?>
    </ul>

</body>

</html>