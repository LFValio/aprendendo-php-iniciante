<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Operador Unário</title>

    </head>

    <body> 

        <div>

            <?php
            
                $ano = $_GET["a"];
                $idade = 2021 - $ano;
                $obr = $idade >= 18 && $idade < 65 ? "obrigatório" : "não obrigatório";

                echo "Você tem $idade anos, sendo assim, seu voto é $obr."

            ?>

        </div>

    </body>

</html>