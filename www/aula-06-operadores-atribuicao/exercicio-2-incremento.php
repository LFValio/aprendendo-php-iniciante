<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Exercício 2 - Incremento</title>

    </head>

    <body> 

        <div>

            <?php
            
                //Mostral qual foi o ano anterior ao ano atual

                $ano = $_GET["a"];
                echo "O ano atual é $ano e o ano anterior foi ". --$ano;

                $ano--;
                echo "<br>O ano anterior foi $ano.";

            ?>

        </div>

    </body>

</html>