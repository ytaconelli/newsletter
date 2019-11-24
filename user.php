<?php
        $arquivo = fopen("emails.txt", "r") or die("Arquivo não encontrado");
        while(!feof($arquivo)){
            echo fgets($arquivo) . "<br>";
        }
        fclose($arquivo);

        $arquivo = fopen("emails.txt", "r") or die("Arquivo não encontrado");
        
?>