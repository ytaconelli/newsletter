<?php
    $linhas = -1;

    $arquivo = fopen("emails.txt", "r") or die("Arquivo não encontrado");
    while(!feof($arquivo)){
        echo fgets($arquivo) . "<br>";
        $linhas++;
        }
        echo "<hr>";
        echo "Número de emails cadastrados: " . $linhas;
        echo "<br>";
        echo "<h3><a href='index.php'>Voltar a página inicial</a></h3>";
        fclose($arquivo);

        
?>