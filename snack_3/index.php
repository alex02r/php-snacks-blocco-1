<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Snack 3</title>
</head>
<body>
    <?php 
        $posts = [
            '21-01-2024' =>[
                [
                    'title' => 'nome',
                    'author' => 'giorgio',
                    'text' => 'ciao'
                ],
                [
                    'title' => 'aaaa',
                    'author' => 'giorgio',
                    'text' => 'micio'
                ]
            ],
            '22-01-2024' =>[
                [
                    'title' => 'bimbo',
                    'author' => 'pippo',
                    'text' => 'neonato'
                ]
            ],
            '23-01-2024' =>[
                [
                    'title' => 'gatto1',
                    'author' => 'IloveMici',
                    'text' => 'micino'
                ],
                [
                    'title' => 'gatto2',
                    'author' => 'IloveMici',
                    'text' => 'micino 2'
                ],
                [
                    'title' => 'gatto3',
                    'author' => 'IloveMici',
                    'text' => 'micino 3'
                ]
            ]
        ];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>SOCIAL</h1>
            </div>
        </div>
    </div>
    <?php 
        foreach($posts as $index => $day){
        ?>
            <h3><?php echo $index; ?></h3>
            <?php foreach($day as $post){ ?>
                <p> 
                    <?php echo $post['author']; ?> </br>
                    post:<?php echo $post['title']; ?> <br> 
                    descrizione: <?php echo $post['text']; ?>
                </p> 
            <?php }
        }
        ?>
</body>
</html>