<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsletter</title>

    <style>

   header{
       text-align: center;
   }

    form{
        text-align: center;
    }
    
    </style>

</head>
<body>

<header>
<h1>Newsletter</h1>
</header>
    
<form action="cadastrado.php" method="POST">
    
    <div>
        <label for="form-email">Email: </label>
        <input type="email" name="email" id="form-email">
    </div>
    <br>
    <div>
        <input type="submit" value="Confirmar">
    </div>

</form>

<footer>
<a href="user.php">Usuários cadastrados</a>
</footer>

</body>
</html>