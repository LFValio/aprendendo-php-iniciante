<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css2/estilo.css"/>
        <title>exercicio 1</title>

    </head>

    <body> 

        <div>

            <?php

                // Faça uma função de uma soma.

                function soma($a, $b) {
                    return $a + $b;
                }               

                $x = 5;
                $y = 3;
                $r = soma($x, $y);

                echo "A soma entre $x e $y é igual a $r!";
               
            ?>

        </div>

    </body>

</html>