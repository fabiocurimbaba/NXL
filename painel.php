<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Usuarios</title>
</head>
<body>
    <header>
        <h1>Seja bem vindo ao painel</h1>
        <?php echo $_SESSION['email'];?>

        <p>
            <a href="logout.php">logout</a>
        </p>
    </header>
        
</body>
</html>