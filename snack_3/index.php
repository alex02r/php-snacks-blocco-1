<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <?php 
        $posts = [
            '21-01-2024' =>[
                [
                    'tile' => 'nome',
                    'author' => 'giorgio',
                    'text' => 'ciao'
                ],
                [
                    'tile' => 'aaaa',
                    'author' => 'giorgio',
                    'text' => 'micio'
                ]
            ],
            '22-01-2024' =>[
                [
                    'tile' => 'bimbo',
                    'author' => 'pippo',
                    'text' => 'neonato'
                ]
            ],
            '23-01-2024' =>[
                [
                    'tile' => 'gatto1',
                    'author' => 'IloveMici',
                    'text' => 'micino'
                ],
                [
                    'tile' => 'gatto2',
                    'author' => 'IloveMici',
                    'text' => 'micino 2'
                ],
                [
                    'tile' => 'gatto3',
                    'author' => 'IloveMici',
                    'text' => 'micino 3'
                ]
            ]
        ];
    ?>
    <h1>SOCIAL</h1>
    <?php 
        foreach($posts as $index => $day){
        ?>
            <h3><?php echo $index; ?></h3>
        <?php
        }
    ?>
</body>
</html>