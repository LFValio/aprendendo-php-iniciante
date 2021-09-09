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
            
                    $n1 = $_GET["a"];
                    $n2 = $_GET["b"];
                    $media = ($n1 + $n2) / 2;

                    $sit = $media > 6? "Aprovado!" : "Reprovado!";

                    echo "Os valores recebidos foram $n1 e $n2.";
                    echo "<br>A média foi de $media, ou seja, você foi ". ($media > 6? "Aprovado!" : "Reprovado!");

            ?>

        </div>

    </body>

</html>