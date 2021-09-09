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

                // Faça uma função que some múltiplos parâmetros.

                function somador() {
                    $p = func_get_args();
                    $tot_arg = func_num_args();
                    $soma = 0;
                    for($i=0;$i<$tot_arg;$i++) {
                        $soma += $p[$i];
                    }
                    return $soma;
                }


                echo somador(5, 3, 12, 32, 2);
                echo "<br>". somador(6, 3, 21);
                echo "<br>". somador(2, 1);
                echo "<br>". somador(9, 6, 2, 1, 2, 3, 4);
                

            ?>

        </div>

    </body>

</html>