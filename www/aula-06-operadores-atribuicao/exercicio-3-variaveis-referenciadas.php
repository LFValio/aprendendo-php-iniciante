<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>Exercício 3 - Variáveis Referênciadas</title>

    </head>

    <body> 

        <div>

            <?php
            
                // Exemplo 1:

                echo "Exemplo 1:";
                $a = 3;
                $b = $a;
                $b += 5;
                echo "<br>A variável A vale $a.";
                echo "<br>A variável B vale $b.";

                // Exemplo 2:

                echo "<br><br>Exemplo 2:";
                $c = 3;
                $d = &$c;
                $d += 5;
                echo "<br>A variável A vale $c.";
                echo "<br>A variável B vale $d.";

            ?>

        </div>

    </body>

</html>