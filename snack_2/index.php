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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Login</h1>
            </div>
            <div class="col-6">
                <form action="index.php" method="GET">
                    <div class="mb-3">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" id="nome" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="mail" id="email" name="mail">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="eta">Età</label>
                        <input class="form-control" type="text" id="eta" name="age">
                    </div>

                    <button class="btn btn-success" type="submit">Verifica</button>
                </form>
                <?php if (isset($value)) {
                        if($value == 'accesso riuscito'){
                        ?> <h5 class="text-success"> <?php echo $value; ?> </h5> <?php
                        }else{
                        ?> <h5 class="text-danger"> <?php echo $value; ?> </h5> <?php
                        }
                } ?>
            </div>
        </div>
    </div>
</body>
</html>