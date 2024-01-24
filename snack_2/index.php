<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Snack 2</title>
</head>
<body>
    <?php 
        if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
            //controllo per il name email e age
            if (strlen($_GET['name']) > 3 && str_contains($_GET['mail'], '.') && str_contains($_GET['mail'], '@')  && is_numeric($_GET['age'])) {
                //accesso riuscito
                $value = 'accesso riuscito';
            }else{
                //accesso negato
                $value = 'accesso neagto';
            }
        }
    ?>
    <form action="index.php" method="GET">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="name">

        <label for="email">Email</label>
        <input type="mail" id="email" name="mail">

        <label for="eta">Età</label>
        <input type="text" id="eta" name="age">

        <button type="submit">Verifica</button>
    </form>
    <?php if (isset($value)) {
        echo $value;
    } ?>
</body>
</html>