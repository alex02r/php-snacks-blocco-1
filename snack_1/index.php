<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $matchs = [
            [
                'casa' => 'Milano',
                'ospite' => 'Treviso',
                'punti_casa' => 60,
                'punti_ospite' => 75
            ],
            [
                'casa' => 'Venezia',
                'ospite' => 'Sassari',
                'punti_casa' => 83,
                'punti_ospite' => 80
            ],
            [
                'casa' => 'Roma',
                'ospite' => 'Lazio',
                'punti_casa' => 98,
                'punti_ospite' => 104 
            ]
        ];
    ?>
    <h1>Partite di Basket</h1>
    <?php
        foreach( $matchs as $match){ 
            ?> 
                <p> <?php echo $match['casa']; ?> - <?php echo $match['ospite']; ?> | <?php echo $match['punti_casa']; ?>-<?php echo $match['punti_ospite']; ?> </p> 
            <?php
        }
    ?>
</body>
</html>