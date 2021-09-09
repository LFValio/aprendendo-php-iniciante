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

                // Faça o procedimento de uma soma.

                function soma($a, $b) {
                    $s = $a + $b;
                    echo "<p>A soma entre $a e $b é igual a $s</p>";
                }               

                
               soma(5, 8);
               soma(10, 2);
               soma(9, 17);
               $n1 = 7;
               $n2 = 9;
               soma($n1, $n2);

            ?>

        </div>

    </body>

</html>