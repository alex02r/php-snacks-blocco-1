<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php 
        if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
            //controllo per il name
            if (strlen($_GET['name']) - 1 > 3) {
                //accesso riuscito
            }else{
                //accesso negato
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
</body>
</html>