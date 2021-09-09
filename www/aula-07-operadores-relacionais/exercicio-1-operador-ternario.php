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
            
                    $num1 = $_GET["a"];
                    $num2 = $_GET["b"];
                    $op = $_GET["op"];
                    echo "Os valores recebidos foram $num1 e $num2.";

                    $re = ($op == "s") ? $num1+$num2 : $num1*$num2;
                    echo "<br>O resultado da operação foi $re.";

            ?>

        </div>

    </body>

</html>