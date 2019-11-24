<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <style>
    *{
        text-align: center;
    }
    </style>

</head>
<body>
    <h1>
    O Email "<?php echo $_POST['email']; ?>" foi cadastrado com sucesso!
    </h1>

    <?php

    $arquivo = fopen("emails.txt", "a") or die("Não foi possível encontrar o arquivo");

    $texto = $_POST['email'];
    $texto = "$texto\n";
    fwrite($arquivo, $texto);
    fclose($arquivo);

    ?>

    <footer>
    <h1><a href="index.php">Voltar a página inicial</a></h1>
    </footer>

</body>
</html>