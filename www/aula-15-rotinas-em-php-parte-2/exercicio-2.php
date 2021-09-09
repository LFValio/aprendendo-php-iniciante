<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>Curso em Vídeo - PHP</title>

    </head>

    <body> 

        <div>

            <?php

                require "esse-arquivo-nao-existe.php";
                echo "<h1>Testando Novas Funções</h1>"; 
                saudacoes();
                $val = 506;
                valorNum($val);

            ?>

        </div>

    </body>

</html>